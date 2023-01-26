<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Essay Speed Checker</title>
    <link rel="stylesheet" href="style-teacher.css">
    <script src="https://code.jquery.com/jquery-3.6.3.js"
        integrity="sha256-nQLuAZGRRcILA+6dMBOvcRh5Pe310sBpanc6+QBmyVM=" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
</head>

<body>
    <div class="part1">
        <div class="text-center row">
            <div id="left-side" class="col-sm-7">
                <div id="check-statements">
                    <table>
                        <tbody id="table-row-statements">
                            <tr>
                                <td>
                                    <table class="table-statements">
                                        <thead>
                                            <tr>
                                                <th class="th-statements">Question</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-statements">Lorem ipsum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">denada bum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table-statements">
                                        <thead>
                                            <tr>
                                                <th class="th-statements">Question</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-statements">Lorem ipsum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">denada bum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table-statements">
                                        <thead>
                                            <tr>
                                                <th class="th-statements">Question</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-statements">Lorem ipsum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">denada bum</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                                <td>
                                    <table class="table-statements">
                                        <thead>
                                            <tr>
                                                <th class="th-statements">Question</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="td-statements">Lorem ipsum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">denada bum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">Lorem ipsum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">denada bum</td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                                    molestiae quis deserunt sapiente repellendus. Obcaecati voluptatibus
                                                    laborum eos vitae culpa rerum iure corrupti. Libero exercitationem
                                                    dolore qui earum accusantium maxime.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                                    molestiae quis deserunt sapiente repellendus. Obcaecati voluptatibus
                                                    laborum eos vitae culpa rerum iure corrupti. Libero exercitationem
                                                    dolore qui earum accusantium maxime.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="td-statements">
                                                    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Magni
                                                    molestiae quis deserunt sapiente repellendus. Obcaecati voluptatibus
                                                    laborum eos vitae culpa rerum iure corrupti. Libero exercitationem
                                                    dolore qui earum accusantium maxime.
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            <tr>
                        </tbody>
                    </table>

                </div>
                <div id="div-question">
                    <table id="table-question">
                        <thead>
                            <tr>
                                <th>
                                    Insert Section here
                                </th>
                            </tr>
                        </thead>
                        <tbody id="tbody-question">
                            <tr>
                                <td><textarea id="textarea-question" cols="30" rows="9"
                                        placeholder="Create question here..."></textarea></td>
                            </tr>
                            <tr>
                                <td id="td-question-btns">
                                    <div class="row">
                                        <div id="div-erase" class="col-sm-6">
                                            <button class="btns-question-creation">ERASE</button>
                                        </div>
                                        <div id="div-create" class="col-sm-6">
                                            <button class="btns-question-creation">CREATE</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <div id="right-side" class="col-sm-5">

                <div>
                    <table id="title-re-evaluation" style="position: sticky;">
                        <thead>
                            <tr>
                                <th>
                                    RE-EVALUATION
                                </th>
                            </tr>
                        </thead>
                    </table>
                </div>
                <div id="re-evaluation-content">
                    <table id="table-re-evaluation">
                        <tbody class="tbody-re-evaluation">
                            <tr>
                                <td>
                                    <table class="table-re-eval-content">
                                        <thead class="thead-re-eval-content">
                                            <tr>
                                                <th>
                                                    Question in Re-evaluation
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-re-eval-content">
                                            <tr>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis
                                                    aliquid aperiam adipisci necessitatibus autem doloribus in cumque
                                                    architecto et pariatur, dignissimos aut accusantium totam,
                                                    similique, maiores facere quisquam eaque quaerat.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="table-re-eval-interact">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table class="table-re-eval-interact">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <button>❌</button>
                                                                                </td>
                                                                                <td>
                                                                                    0%
                                                                                    <input type="range"
                                                                                        id="percentage-score" min="0"
                                                                                        max="100">
                                                                                    100%
                                                                                </td>
                                                                                <td>
                                                                                    <button>✔</button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Reason: Correct Answer, Incorrect EVALUATION
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table class="table-re-eval-content">
                                        <thead class="thead-re-eval-content">
                                            <tr>
                                                <th>
                                                    Question in Re-evaluation
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-re-eval-content">
                                            <tr>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis
                                                    aliquid aperiam adipisci necessitatibus autem doloribus in cumque
                                                    architecto et pariatur, dignissimos aut accusantium totam,
                                                    similique, maiores facere quisquam eaque quaerat.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="table-re-eval-interact">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table class="table-re-eval-interact">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <button>❌</button>
                                                                                </td>
                                                                                <td>
                                                                                    0%
                                                                                    <input type="range"
                                                                                        id="percentage-score" min="0"
                                                                                        max="100">
                                                                                    100%
                                                                                </td>
                                                                                <td>
                                                                                    <button>✔</button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Reason: Correct Answer, Incorrect EVALUATION
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <table class="table-re-eval-content">
                                        <thead class="thead-re-eval-content">
                                            <tr>
                                                <th>
                                                    Question in Re-evaluation
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="tbody-re-eval-content">
                                            <tr>
                                                <td>
                                                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Omnis
                                                    aliquid aperiam adipisci necessitatibus autem doloribus in cumque
                                                    architecto et pariatur, dignissimos aut accusantium totam,
                                                    similique, maiores facere quisquam eaque quaerat.
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <table class="table-re-eval-interact">
                                                        <tbody>
                                                            <tr>
                                                                <td>
                                                                    <table class="table-re-eval-interact">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td>
                                                                                    <button>❌</button>
                                                                                </td>
                                                                                <td>
                                                                                    0%
                                                                                    <input type="range"
                                                                                        id="percentage-score" min="0"
                                                                                        max="100">
                                                                                    100%
                                                                                </td>
                                                                                <td>
                                                                                    <button>✔</button>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    Reason: Correct Answer, Incorrect EVALUATION
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div id="logo-area" class="row">

                    <div class="logo-placement col-sm-7">
                        <img src="images/logo-placement.jpg" alt="" style="width: 90%; height: 90%;">
                    </div>

                    <div class="right-bot-btns col-sm-5">
                        <button id="create-room-btn">CREATE ROOM</button>
                        <button id="change-room-btn">CHANGE ROOM</button>
                        <button id="your-students-btn">YOUR STUDENTS</button>
                        <button id="created-questions-btn">CREATED QUESTIONS</button>
                        <button id="logout-btn">LOGOUT</button>
                    </div>

                </div>

            </div>
        </div>
    </div>

    <div id="part2">|</div>

    <div id="part3">
        <div id="create-room-title">
            CREATE ROOM
        </div>
        <div id="create-room-content">
            <div>
                <input type="text" placeholder="Room Name...">
            </div>
            <div class="row">
                <div class="col-sm-10">
                    generated room code yada yada
                </div>
                <div class="col-sm-2">
                    <button>RANDOMIZE</button>
                </div>
            </div>
        </div>
        <div class="create-room-input">
            <div class="row">
                <div class="col-sm-6">
                    <button id="cancel-create-room-btn">CANCEL</button>
                </div>
                <div class="col-sm-6">
                    <button id="">CREATE</button>
                </div>
            </div>
        </div>
    </div>

    <div id="part4">
        <div id="rooms">
            <div>
                ROOMS
            </div>
            <div id="rooms-input">
                <table>
                    <tbody>

                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                room name yada yada
                            </td>
                            <td>
                                access room code yada yada
                            </td>
                            <td>
                                <button>ENTER ROOM</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="exit-rooms">CANCEL</button>
                </div>
            </div>
        </div>
    </div>

    <div id="part5">
        <div id="created-questions">
            <div>
                CREATED QUESTIONS
            </div>
            <div id="created-questions-input">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                question question yada yada
                            </td>
                            <td>
                                <button>EDIT</button>
                            </td>
                            <td>
                                <button>PUBLISH</button>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <button id="exit-created-questions">CANCEL</button>
                </div>
            </div>
        </div>
    </div>

    <div id="part6">
        <div id="list-of-students">
            <div id="list-of-students-title">
                SECTION's LIST OF STUDENTS
            </div>
            <div id="list-of-students-input">
                <table>
                    <tbody>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                studentusername1
                            </td>
                            <td>
                                studentemail1
                            </td>
                            <td>
                                <button>KICK</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div>
                <button id="cancel-your-students-btn">CANCEL</button>
            </div>
        </div>

    </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>
</body>
<script src="script_page_teacher.js"></script>

</html>