<?php

require_once 'vendor/autoload.php';

require_once 'init.php';

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;

$app->get('/admin[/]', function ($request, $response, $args) {
    return $this->view->render($response, '/admin/manager_board.html.twig');
});

$app->get('/admin/waitinglist', function ($request, $response, $args) {
    $waitingList = DB::query("SELECT w.id,w.firstName cfname,w.lastName clname,w.dateOfBirth,w.gender,w.hasSibling,u.firstName pfname,u.lastName plname,u.phoneNumber,u.email FROM waitinglist w, users u WHERE w.parentId=u.id");
    return $this->view->render($response, '/admin/waitinglist.html.twig', ['list' => $waitingList]);
});

$app->post('/admin/waitinglist/delete/{id:[0-9]+}', function ($request, $response, $args) {
    $child = DB::queryFirstRow("SELECT * FROM waitinglist WHERE id=%i", $args["id"]);
    if(!$child){
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
    DB::delete("waitinglist", "id=%i", $args["id"]);
    $waitingList = DB::query("SELECT w.id,w.firstName cfname,w.lastName clname,w.dateOfBirth,w.gender,w.hasSibling,u.firstName pfname,u.lastName plname,u.phoneNumber,u.email FROM waitinglist w, users u WHERE w.parentId=u.id");
    return $this->view->render($response, '/admin/waitinglist.html.twig', ['list' => $waitingList]);
});

$app->post('/admin/waitinglist/add/{id:[0-9]+}', function ($request, $response, $args) {
    $child = DB::queryFirstRow("SELECT * FROM waitinglist WHERE id=%i", $args["id"]);
    if(!$child){
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
    $level1 = "2017-09-30";
    $level2 = "2018-09-30";
    $level3 = "2019-09-30";
    if(strtotime($child["dateOfBirth"]) > strtotime($level3)){
        $groupid = 1;
    }else if(strtotime($child["dateOfBirth"]) > strtotime($level2)){
        $groupid = 2;
    }else if(strtotime($child["dateOfBirth"]) > strtotime($level1)){
        $groupid = 3;
    }else{
        $groupid = 4;
    }
    $teacherid = DB::queryFirstField("SELECT educatorId FROM groups WHERE id=%i", $groupid);

    DB::insert("children", ["firstName" => $child["firstName"], "lastName" => $child["lastName"], 
            "gender" => $child["gender"], "dateOfBirth" => $child["dateOfBirth"], "firstSchoolDay" => date("Y-m-d"),"parentId" => $child["parentId"], "educatorId" => $teacherid, "groupId" => $groupid]);
    DB::delete("waitinglist", "id=%i", $args["id"]);
    $waitingList = DB::query("SELECT w.id,w.firstName cfname,w.lastName clname,w.dateOfBirth,w.gender,w.hasSibling,u.firstName pfname,u.lastName plname,u.phoneNumber,u.email FROM waitinglist w, users u WHERE w.parentId=u.id");
    return $this->view->render($response, '/admin/waitinglist.html.twig',['list' => $waitingList]);
});

$app->get('/admin/educatorlist', function ($request, $response, $args) {
    $educatorList = DB::query("SELECT * FROM users WHERE role='educator'");
    return $this->view->render($response, '/admin/educatorlist.html.twig', ['list' => $educatorList]);
});

$app->post('/admin/educator/{op:checkin|checkout}/{id:[0-9]+}', function ($request, $response, $args) {
    $op = $args["op"];
    if(($op == "checkin" || $op == "checkout") && empty($args["id"])){
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
    if($op == "checkin"){
        DB::insert("educatorattendance", ["educatorId" => $args["id"]]);
        return $this->view->render($response, '/admin/educator_check_success.html.twig', ['op' => $op]);
    }else{
        DB::update("educatorattendance", ["endTs" => date("Y-m-d H:i:s")],"educatorId=%i", $args["id"]);
        return $this->view->render($response, '/admin/educator_check_success.html.twig', ['op' => $op]);
    }

}); 

$app->get('/admin/attendance', function ($request, $response, $args) {
    return $this->view->render($response, '/admin/children_attendance.html.twig');
});

$app->post('/admin/attendance', function ($request, $response, $args) use ($log){
    $groupid = $request->getParam('group');
    $date = $request->getParam('date');
    $date = date("Y-m-d", strtotime($date));
    $attendanceList = DB::query("SELECT g.groupName,c.firstName,c.lastName,a.date,a.startTime,a.endTime,a.`status`,a.note "
                . "FROM children c,attendance a,groups g WHERE g.id=c.groupId AND a.childId=c.id AND a.date=%s AND g.id=%i",$date, $groupid);
  
    return $this->view->render($response, '/admin/attendancelist.html.twig', ['list' => $attendanceList]);
});

$app->get('/admin/childrenlist[/{pageNo:[0-9]+}]', function ($request, $response, $args) {
    $pageNo = $args["pageNo"] ?? 1;

    $groupList = DB::query("SELECT g.id gid,g.groupName gname,u.firstName tfname,u.lastName tlname "
        . "FROM groups g,users u WHERE u.id=g.educatorId LIMIT %i OFFSET %i",1,($pageNo -1));

    $childrenList = DB::query("SELECT c.id,c.firstName cfname,c.lastName clname,c.gender gender, c.dateOfBirth cdob,"
        ."c.firstSchoolDay cfsd, u.firstName pfname,u.lastName plname,u.phoneNumber phone,g.groupName "
        ."FROM users u,groups g,children c WHERE c.parentId=u.id AND g.id=c.groupId");

    //$childrenList = DB::query("SELECT u.firstName tname,g.groupName,c.firstName,c.lastName FROM users u,groups g,children c WHERE u.id=g.educatorId AND g.id=c.groupId");
    $prevNo = ($pageNo > 1) ? $pageNo-1 : "";
    $nextNo = ($pageNo < 4) ? $pageNo+1 : "";
    return $this->view->render($response, '/admin/childrenlist.html.twig', ['list' => $childrenList, 
        "groupList" => $groupList, "prevNo" => $prevNo, "nextNo" => $nextNo, "pageNo" => $pageNo]);
});

$app->post('/admin/childrenlist/delete/{id:[0-9]+}', function ($request, $response, $args) {
    $child = DB::queryFirstRow("SELECT * FROM children WHERE id=%i", $args["id"]);
    if(!$child){
        throw new \Slim\Exception\NotFoundException($request, $response);
    }
    DB::delete("attendance", "childId=%i", $args["id"]);
    DB::delete("childnotes", "childId=%i", $args["id"]);
    DB::delete("children", "id=%i", $args["id"]);

    $pageNo = $args["pageNo"] ?? 1;

    $groupList = DB::query("SELECT g.id gid,g.groupName gname,u.firstName tfname,u.lastName tlname "
        . "FROM groups g,users u WHERE u.id=g.educatorId LIMIT %i OFFSET %i",1,($pageNo -1));

    $childrenList = DB::query("SELECT c.firstName cfname,c.lastName clname,c.gender gender, c.dateOfBirth cdob,"
        ."c.firstSchoolDay cfsd, u.firstName pfname,u.lastName plname,u.phoneNumber phone,g.groupName "
        ."FROM users u,groups g,children c WHERE c.parentId=u.id AND g.id=c.groupId");

    //$childrenList = DB::query("SELECT u.firstName tname,g.groupName,c.firstName,c.lastName FROM users u,groups g,children c WHERE u.id=g.educatorId AND g.id=c.groupId");
    $prevNo = ($pageNo > 1) ? $pageNo-1 : "";
    $nextNo = ($pageNo < 4) ? $pageNo+1 : "";
    return $this->view->render($response, '/admin/childrenlist.html.twig', ['list' => $childrenList, 
        "groupList" => $groupList, "prevNo" => $prevNo, "nextNo" => $nextNo, "pageNo" => $pageNo]);
});

$app->group('/admin', function (App $app) use ($log) {

    $app->get('/userlist', function (Request $request, Response $response, array $args) {
        $list = DB::query("SELECT id,email,`role`,createdTS,firstName,lastName,gender,phoneNumber,`address` FROM users");
        
        return $this->view->render($response, '/admin/userlist.html.twig', ['list' => $list]);
    });

    $app->get('/userlistJson', function (Request $request, Response $response, array $args) {
        $list = DB::query("SELECT id,email,`role`,createdTS,firstName,lastName,gender,phoneNumber,`address` FROM users");
        // print_r($list);
        $json = json_encode($list, JSON_PRETTY_PRINT);
        $response->getBody()->write($json);
        return $response;
    });


    $app->get('/userlist/{id:[0-9]+}', function (Request $request, Response $response, array $args) {
        $id = $args['id'];
        $user = DB::queryFirstRow("SELECT id,email,`role`,createdTS,firstName,lastName,gender,phoneNumber,`address` FROM users WHERE id=%i", $id);
        // 404 if item is null (not found or does not belong to this user)
        $json = json_encode($user, JSON_PRETTY_PRINT);
        $response->getBody()->write($json);
        return $response;
    });

    $app->map(['PUT','PATCH'], '/userlist/{id:[0-9]+}', function (Request $request, Response $response, array $args) use ($log) {
        $id = $args['id'];
        $json = $request->getBody();
        $user = json_decode($json, TRUE); // true makes it return an associative array instead of an object
        // validate
        $method = $request->getMethod();
        if ( ($result = validateUser($user, $method == 'PATCH')) !== TRUE) {
            $response = $response->withStatus(400);
            $response->getBody()->write(json_encode("400 - " . $result));
            return $response;
        }
        $origItem = DB::queryFirstRow("SELECT * FROM users WHERE id=%i", $args['id']);
        if (!$origItem) { // record not found
            $response = $response->withStatus(404);
            $response->getBody()->write(json_encode("404 - not found"));
            return $response;
        }
        // unfortunately using affectedRows() won't work here b/c if data is the same as before
        // it returns 0 even if record exists and belongs to current user
        DB::update('users', $user, "id=%i", $args['id']);
        $log->debug("Record users updated, id=" . $id);
        $count = DB::affectedRows();
        $json = json_encode($count != 0, JSON_PRETTY_PRINT); // true or false
        return $response->getBody()->write($json);
    });

    $app->delete('/userlist/{id:[0-9]+}', function (Request $request, Response $response, array $args) use ($log) {
        $id = $args['id'];
        $hasChild = DB::queryFirstField("SELECT COUNT(*) FROM `children` WHERE parentId=%i",$id);

        //echo $hasChild;
        if($hasChild){
            $response = $response->withStatus(400);
            $response->getBody()->write(json_encode("400 - The user has ". $hasChild ."child in daycare!"));
            return $response;
        }else{
            DB::delete('users', "id=%i", $args['id']);
            $log->debug("Record users deleted id=" . $id);
        }
        // code is always 200
        // return true if record actually deleted, false if it did not exist in the first place
        $count = DB::affectedRows();
        $json = json_encode($count != 0, JSON_PRETTY_PRINT); // true or false
        return $response->getBody()->write($json);
    });
});

function validateUser($user, $forPatch = false) {
    if ($user === NULL) { // probably json_decode failed due to JSON syntax errors
        return "Invalid JSON data provided";
    }
    // - only allow the fields that must/can be present
    $expectedFields = ["id","email","role","createdTS","firstName","lastName","gender","phoneNumber","address"];
    $userFields = array_keys($user); // get names of fields as an array
    // check if there are any fields that should not be there
    if ($diff = array_diff($userFields, $expectedFields)) {
        return "Invalid fields in User: [". implode(',', $diff). "]";
    }
    //
    if (!$forPatch) { // is it PUT or POST
        // - check if any fields are missing that must be there
        if ($diff = array_diff($expectedFields, $userFields)) {
            return "Missing fields in Todo: [". implode(',', $diff). "]";
        }
    }
    // do not allow any fields to be null - database would not accept it
    $nullableFields = []; // put list of nullable fields here
    foreach($user as $key => $value) {
        if (!in_array($key, $nullableFields)) {
            if (@is_null($value)) { // @ is to suppress a warning (which would be printed out)
                return "$key must not be null";
            }
        }
    }
    // - task 1-100 characters long
    if (isset($user['email'])) {
        $email = $user['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
            return "Email must look like an email";
        }
    }
    // - dueDate a valid date from 1900 to 2099 years
    if (isset($user['phoneNumber'])) {
        if (preg_match('/^([1-9]{3})(-)([0-9]{3})(-)([0-9]{4})$/', $user['phoneNumber']) !== 1) {
            return "phone need to be 888-888-8888";
        }
    }
    // - status must be pending or done
    if (isset($user['address'])) {
        if(strlen($user['address']) < 2){
            return "Please check your address.";
        }
    }
    // if we passed all tests return TRUE
    return TRUE;
}

function startWith($string, $startString){
    $len = strlen($startString);
    return(substr($string,0,$len) === $startString);
}

//middleware
$app->add(function(Request $request, Response $response, callable $next){
    $url = $request->getUri()->getPath();
    if(startWith($url,"/admin")){
        if(!isset($_SESSION["user"]) || $_SESSION["user"]["role"] !== "admin"){
            $response = $response->withStatus(403);
            return $this->view->render($response,"admin/error_access_denied.html.twig");
        }
    }
    return $next($request,$response);
});

$app->get('/admin/groupchart', function ($request, $response, $args) {
    $numberlist = DB::queryFirstColumn("SELECT COUNT(*) FROM `children` GROUP BY groupId ORDER By groupId");
    //print_r($numberlist);
    return $this->view->render($response, '/admin/groupchart.html.twig',['list' => $numberlist]);
});

$app->get('/admin/growthchart/{id:[0-9]+}', function ($request, $response, $args) {
    $result = DB::query("SELECT cn.`weight`,cn.height,cn.noteCreatedTS,c.firstName,c.lastName FROM childnotes cn,children c WHERE cn.childId = c.id AND childId=%i ORDER BY noteCreatedTS",$args["id"]);
    print_r($result);
    return $this->view->render($response, '/admin/growthchart.html.twig',['list' => $result]);
});

// $app->get('/admin/user/list', function .....);