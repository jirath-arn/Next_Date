<!DOCTYPE html>
<html lang="en">
    <?php
        $arr = explode("-",$_GET['toDate']);
        if($arr[0] <= 0 or $arr[1] >= 13 or $arr[1] <= 0 or $arr[2] >= 3000 or $arr[2] <= 1000){
            echo '<script>alert("Please check your date and try again.");
            window.location.href = "index.html";
            </script>'; 
        }
        #365 days
        else if($arr[2] % 4 == 0 and $arr[2] % 100 == 0){ 
            #366 days
            if($arr[2] % 400 == 0 ){ 
                #month 2
                if($arr[1] == 2){ 
                    if($arr[0] > 29){
                        echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>'; 
                    }
                    else if($arr[0] == 29){
                        $arr[0] = 01;
                        $arr[1] = $arr[1] + 1;
                        if($arr[1]>12){
                            $arr[2] = $arr[2]+1;
                        }
                    }
                    else{
                        $arr[0] = $arr[0]+1;
                    }
                    echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
                #month 4 6 9 11
                else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){
                    if($arr[0] > 30){
                        echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>'; 
                    }
                    else if($arr[0] == 30){
                        $arr[0] = 01;
                        $arr[1] = $arr[1] + 1;
                        if($arr[1]>12){
                            $arr[2] = $arr[2]+1;
                        }
                    }
                    else{
                        $arr[0] = $arr[0]+1;
                    }
                    echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
                else{
                    if($arr[0] > 31){
                        echo '<script>alert("Please check your date and try again.");
                        window.location.href = "index.html";
                        </script>'; 
                    }
                    if($arr[0] == 31){
                        $arr[0] = 01;
                        $arr[1] = $arr[1] + 1;
                        if($arr[1] > 12){
                            $arr[1] = 01;
                            $arr[2] = $arr[2]+1;
                        }
                    }
                    else{
                        $arr[0] = $arr[0]+1;
                    }
                    echo $arr[0]."/".$arr[1]."/".$arr[2];
                }
            }
            #month 2
            else if($arr[1] == 2){ 
                if($arr[0] > 28){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 28){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1]>12){
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            #month 4 6 9 11
            else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){ 
                if($arr[0] > 30){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 30){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1]>12){
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            else{
                if($arr[0] > 31){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 31){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1]>12){
                        $arr[1] = 01;
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
        }
        #366 days
        else{
            #month 2
            if($arr[1] == 2){
                if($arr[0] > 29){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 29){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1] > 12){
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            #month 4 6 9 11
            else if($arr[1] == 4 or $arr[1] == 6 or $arr[1] == 9 or $arr[1] == 11){
                if($arr[0] > 30){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 30){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1]>12){
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
            else{
                if($arr[0] > 31){
                    echo '<script>alert("Please check your date and try again.");
                    window.location.href = "index.html";
                    </script>'; 
                }
                else if($arr[0] == 31){
                    $arr[0] = 01;
                    $arr[1] = $arr[1] + 1;
                    if($arr[1] > 12){
                        $arr[1] = 01;
                        $arr[2] = $arr[2]+1;
                    }
                }
                else{
                    $arr[0] = $arr[0]+1;
                }
                echo $arr[0]."/".$arr[1]."/".$arr[2];
            }
        }
    ?>
</html>