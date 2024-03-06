<link rel="stylesheet" href="css/records.css" type="text/css">
<meta charset="UTF-8">

<div class="rc_main">
    <div class="rc_grades">
        <?php
        
        include("action/connection.php");
        $sql = "SELECT * FROM courses";
        $query = mysqli_query($conn, $sql);
        if(mysqli_num_rows($query) > 0)
        {
            while($row = mysqli_fetch_array($query))
            {
                echo "<span>" . $row['course-name'] . "</span>";
            }
        }
        else
        {
            echo "No courses yet.";
        }

        ?>
        <span>David</span>
        <span>David Shmuelovich</span>
        <span>David</span>
        <span>David</span>
        <span>David</span>
        <span>David</span>
        <span>David</span>
        <span>David</span>
        <span>David Shmuelovich</span>
        <span>David</span>
        <div class="rc_plus">+</div>
    </div>
    <div class="homework">
        <div class="rc_col">
            <div class="rc_row rc_title">
                Title
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
                Title
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
                Title
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
                Title
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