<link rel="stylesheet" href="css/records.css" type="text/css">
<script src="https://kit.fontawesome.com/d443f05e3c.js" crossorigin="anonymous"></script>
<meta charset="UTF-8">
<script src="js/records.js"></script>

<div id="popup-window"></div>
<div id="popup-window-msg">
    <div id="popup-msg-text">
        <div id="popup-inner">
            <div id="popup-split-top"></div>
            <div id="popup-split-bottom">
                <div id="popup-ok"><i class="fa-solid fa-circle-check"></i>&nbsp;כן</div>
                <div id="popup-cancel"><i class="fa-solid fa-circle-xmark"></i>&nbsp;ביטול</div>
            </div>
        </div>
    </div>
</div>

<div class="rc_main">
    <div class="rc_grades">
        <?php
        
        include("action/function.php");
        include("action/connection.php");
        $sql = "SELECT * FROM courses";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0)
        {
            while($row = mysqli_fetch_array($query))
            {
                echo "<span>" . $row['course-name'] . " - כיתה " . get_class_name_by_id($row['course-class_id']) . "</span>";
            }
        }
        else
        {
            echo "No courses yet.";
        }

        ?>
        <div class="rc_plus">+</div>
    </div>
    <div class="homework">
        <div class="rc_col">
            <div class="rc_row rc_title">
                שאלונים
            </div>
            <div class="rc_scroll">
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rc_plus">+</div>
            </div>
        </div>

        <div class="rc_col">
            <div class="rc_row rc_title">
                מורים
            </div>
            <div class="rc_scroll">
                <?php 
                
                $sql2 = "SELECT * FROM users WHERE rank = 't'";
                $query2 = mysqli_query($conn, $sql2);
                if(mysqli_num_rows($query2) > 0)
                {
                    $t_text = "";
                    while($row = mysqli_fetch_array($query2))
                    {
                        $t_text .= '<div class="rc_row">';
                        $t_text .= '<div class="rc_row_pic">';
                        $t_text .= '<img src="img/user.png">';
                        $t_text .= '</div>';
                        $t_text .= '<div class="rc_row_text">';
                        $t_text .= '<div class="edit-split">';
                        $t_text .= '<div class="edit-click">עריכה</div>';
                        $t_text .= '<div class="delete-click delete-teacher" id="' . $row['id'] . '">מחיקה</div>';
                        $t_text .= '</div>';
                        $t_text .= '<div class="rc_row_text1">';
                        $t_text .= $row['user-first_name'];
                        $t_text .= '&nbsp;';
                        $t_text .= $row['user-last_name'];
                        $t_text .= '</div>';
                        $t_text .= '<div class="rc_row_text2">';
                        $t_text .= '<div class="rc_text2_num">';
                        $t_text .= '3';
                        $t_text .= '</div>';
                        $t_text .= '<div class="rc_text2_prog">';
                        $t_text .= '70%';
                        $t_text .= '</div>';
                        $t_text .= '</div>';
                        $t_text .= '</div>';
                        $t_text .= '</div>';
                    }
                }
                else
                {
                    $t_text = "עדיין אין מורים.";
                }
                echo $t_text;
                
                ?>
                
                <div class="rc_plus">+</div>
            </div>
        </div>

        <div class="rc_col">
            <div class="rc_row rc_title">
                שיעורים
            </div>
            <div class="rc_scroll">
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rc_plus">+</div>
            </div>
        </div>

        <div class="rc_col">
            <div class="rc_row rc_title">
                תלמידים
            </div>
            <div class="rc_scroll">
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="rc_row">
                    <div class="rc_row_pic">
                        <img src="img/user.png">
                    </div>
                    <div class="rc_row_text">
                        <div class="rc_row_text1">
                            Title
                        </div>
                        <div class="rc_row_text2">
                            <div class="rc_text2_num">
                                3
                            </div>
                            <div class="rc_text2_prog">
                                70%
                            </div>
                        </div>
                    </div>
                </div>

                <div class="rc_plus">+</div>
            </div>
        </div>
    </div>
</div>