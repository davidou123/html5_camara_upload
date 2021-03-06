<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
        <title>拍照上傳</title>
        <link rel="stylesheet" href="index.css"/>
		 <script src="https://www.kunlex.com.tw/newrepair/vendors/jquery/dist/jquery.min.js"></script>
        <script type='text/javascript' src='index.js?<?php echo rand();?>' charset='utf-8'></script>
    </head>
    <body>
         <form id="mainForm">
            <div class="content">
                <div class="label">身份證</div>
                <div class="img-area">
                    <div class="container">
                        <input type="file" id='id-face' accept="image/*" />
                        <div id='face-empty-result'>
                            <img style='width:4rem' src="resource/camera.png" alt="">
                            <p>身份證正面照</p>
                        </div>
                        <img style='width: 100%' id='face-result'/>
                    </div>

                    <div class="container" style='margin-top:0.5rem;'>
                        <input type="file" id='id-back' accept="image/*" />
                        <div id='back-empty-result'>
                            <img style='width:4rem' src="resource/camera.png" alt="">
                            <p>身份證反面照</p>
                        </div>
                        <img style='width: 100%' id='back-result'/>
                    </div>
                </div>
            </div>
          
            <div class="btn">
                提交<?php echo rand();?>
            </div>
         </form>
    </body>
</html>