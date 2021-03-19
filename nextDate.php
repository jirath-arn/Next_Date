<!DOCTYPE html>
<html lang="en">
    <?php                                                                                           echo  __LINE__ . ' -> ';
        $arr = explode("-",$_GET['toDate']);                                                        echo  __LINE__ . ' -> ';
        if($arr[0] <= 0 or $arr[1] >= 13 or $arr[1] <= 0 or $arr[2] >= 3000 or $arr[2] <= 1000){    echo  __LINE__ . ' -> ';
            echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
            window.location.href = "index.html";
            </script>';                                                                             echo  __LINE__ . ' -> ';
        }
        #365 days
        else if($arr[2] % 4 == 0 and $arr[2] % 100 == 0){                                           echo  __LINE__ . ' -> ';
            #366 days
            if($arr[2] % 400 == 0 ){                                                                echo  __LINE__ . ' -> ';
                #month 2
                if($arr[1] == 2){                                                                   echo  __LINE__ . ' -> ';
                    if($arr[0] > 29){                                                               echo  __LINE__ . ' -> ';
                        echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>';                                                                 echo  __LINE__ . ' -> ';
                    }
                    else if($arr[0] == 29){                                                         echo  __LINE__ . ' -> ';
                        $arr[0] = 01;                                                               echo  __LINE__ . ' -> ';
                        $arr[1] = $arr[1] + 1;                                                      echo  __LINE__ . ' -> ';
                        if($arr[1]>12){                                                             echo  __LINE__ . ' -> ';
                            $arr[2] = $arr[2]+1;                                                    echo  __LINE__ . ' -> ';
                        }
                    }
                    else{                                                                           echo  __LINE__ . ' -> ';
                        $arr[0] = $arr[0]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                    echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
                #month 4 6 9 11
                else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){             echo  __LINE__ . ' -> ';
                    if($arr[0] > 30){                                                               echo  __LINE__ . ' -> ';
                        echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>';                                                                 echo  __LINE__ . ' -> ';
                    }
                    else if($arr[0] == 30){                                                         echo  __LINE__ . ' -> ';
                        $arr[0] = 01;                                                               echo  __LINE__ . ' -> ';
                        $arr[1] = $arr[1] + 1;                                                      echo  __LINE__ . ' -> ';
                        if($arr[1]>12){                                                             echo  __LINE__ . ' -> ';
                            $arr[2] = $arr[2]+1;                                                    echo  __LINE__ . ' -> ';
                        }
                    }
                    else{                                                                           echo  __LINE__ . ' -> ';
                        $arr[0] = $arr[0]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                    echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    if($arr[0] > 31){                                                               echo  __LINE__ . ' -> ';
                        echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>';                                                                 echo  __LINE__ . ' -> ';
                    }
                    if($arr[0] == 31){                                                              echo  __LINE__ . ' -> ';
                        $arr[0] = 01;                                                               echo  __LINE__ . ' -> ';
                        $arr[1] = $arr[1] + 1;                                                      echo  __LINE__ . ' -> ';
                        if($arr[1] > 12){                                                           echo  __LINE__ . ' -> ';
                            $arr[1] = 01;                                                           echo  __LINE__ . ' -> ';
                            $arr[2] = $arr[2]+1;                                                    echo  __LINE__ . ' -> ';
                        }
                    }
                    else{                                                                           echo  __LINE__ . ' -> ';
                        $arr[0] = $arr[0]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                    echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
            }
            #month 2
            else if($arr[1] == 2){                                                                  echo  __LINE__ . ' -> ';
                if($arr[0] > 28){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 28){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1]>12){                                                                 echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            #month 4 6 9 11
            else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){                 echo  __LINE__ . ' -> ';
                if($arr[0] > 30){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 30){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1]>12){                                                                 echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            else{                                                                                   echo  __LINE__ . ' -> ';
                if($arr[0] > 31){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 31){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1]>12){                                                                 echo  __LINE__ . ' -> ';
                        $arr[1] = 01;                                                               echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
        }
        #366 days
        else{                                                                                       echo  __LINE__ . ' -> ';
            #month 2
            if($arr[1] == 2){                                                                       echo  __LINE__ . ' -> ';
                if($arr[0] > 29){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 29){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1] > 12){                                                               echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            #month 4 6 9 11
            else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){                 echo  __LINE__ . ' -> ';
                if($arr[0] > 30){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 30){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1]>12){                                                                 echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            else{                                                                                   echo  __LINE__ . ' -> ';
                if($arr[0] > 31){                                                                   echo  __LINE__ . ' -> ';
                    echo  __LINE__ . ' -> '; echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>';                                                                     echo  __LINE__ . ' -> ';
                }
                else if($arr[0] == 31){                                                             echo  __LINE__ . ' -> ';
                    $arr[0] = 01;                                                                   echo  __LINE__ . ' -> ';
                    $arr[1] = $arr[1] + 1;                                                          echo  __LINE__ . ' -> ';
                    if($arr[1] > 12){                                                               echo  __LINE__ . ' -> ';
                        $arr[1] = 01;                                                               echo  __LINE__ . ' -> ';
                        $arr[2] = $arr[2]+1;                                                        echo  __LINE__ . ' -> ';
                    }
                }
                else{                                                                               echo  __LINE__ . ' -> ';
                    $arr[0] = $arr[0]+1;                                                            echo  __LINE__ . ' -> ';
                }
                echo  __LINE__ . '<br>'; echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
        }
    ?>
</html>