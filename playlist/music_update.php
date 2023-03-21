<?php
    include_once "./include/header.php";
    include_once "./include/menu.php"

$conn = mysqli_connect("localhost","hanyoko","gks2060!","hanyoko");
$sql= "delete from musiclists where m_no={$_POST['no']}";
$result = mysqli_query($conn, $sql);
$row= mysqli_fetch_array($result);
var_dump($row);
?>

            <div id="musicWrite">
                <h2>음악 수정하기</h2>
                <form action="process/music_process.php" method="post" enctype="multipart/form-data">
                    <table class="writeTable">
                        <tr>
                            <th>노래 제목</th>
                            <td>
                                <input type="text" name="title" id="title" required>
                                <p id="titleText" class="error"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>가수명</th>
                            <td>
                                <input type="text" name="artist" id="artist" required>
                                <p id="artistText" class="error"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>발매일</th>
                            <td>
                                <input type="date" name="date" id="date" required>
                                <p id="dateText" class="error"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>장르</th>
                            <td>
                                <select name="kinds" id="kinds">
                                    <option value="K-POP">K-POP</option>
                                    <option value="POP">POP</option>
                                    <option value="CLASSIC">CLASSIC</option>
                                    <option value="ROCK">ROCK</option>
                                    <option value="JAZZ">JAZZ</option>
                                    <option value="HIPHOP">HIP HOP</option>
                                </select>
                                <p id="kindsText" class="error"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>내용</th>
                            <td>
                                <textarea name="contents" id="contents"></textarea>
                                <p id="contentsText" class="error"></p>
                            </td>
                        </tr>
                        <tr>
                            <th>앨범 사진</th>
                            <td>
                                <input type="file" value="/images/album/default.jpg" name="photourl">
                                <p id="photoText" class="error"></p>
                            </td>
                        </tr>
                            <td colspan="2">
                                <button type="submit">등록하기</button>
                                <button type="reset">취소</button>
                            </td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>