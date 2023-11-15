<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HaiTrieu</title>
    
    <link rel="stylesheet" href="./assest/font/fontawesome-free-6.1.1-web/css/all.css">
    <link rel="stylesheet" href="./assest/style.css">
    <style>
    .nomal {
        width: 100%;
    }
    </style>
</head>

<body>
    <div class="container">
        <!-- <p>hello</p> -->
        <div class="header">header</div>
        <div class="task-menu">menu</div>
        <div class="content-todo">
            <div class="header-content-todo">
                <span class="check-icon"><i class="fa-solid fa-check"></i></span>
                <h2 class="title-header">Hoạt động mỗi ngày</h2>
            </div>

            <div class="todo-all-input">
                    <div class="todo-all-work">
                        <div class="todo-task-work-label">
                            <div class="todo-work-label todo-label">
                                <b>Việc cần làm</b>
                            </div>

                            <div class="add-todo-work">
                                <span><i class="fa-solid fa-square-plus"></i></span>
                                
                            </div>
                        </div>
                        
                        

                        <form class="input-form input-form-work">
                                <div id="input-task" class="text-input ">
                                    <input type="checkbox" class="check_test" name="" id="">
                                    <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                                </div>

                                <div id="input-task" class="text-input ">
                                    <input type="checkbox" class="check_test" name="" id="">
                                    <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                                </div>

                                <div id="input-task" class="text-input ">
                                    <input type="checkbox" class="check_test" name="" id="">
                                    <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                                </div>

                                <div id="input-task" class="text-input ">
                                    <input type="checkbox" class="check_test" name="" id="">
                                    <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                                </div>

                                <div id="input-task" class="text-input ">
                                    <input type="checkbox" class="check_test" name="" id="">
                                    <input type="text" class="text_test" name="" placeholder="nhập công việc" id="">
                                </div>
                            <!-- <input type="text" id="text-input-todo-2" class="text-input" placeholder="Input 2">
                            <input type="text" id="text-input-todo-3" class="text-input" placeholder="Input 3">
                            <input type="text" id="text-input-todo-4" class="text-input" placeholder="Input 4">
                            <input type="text" id="text-input-todo-5" class="text-input" placeholder="Input 5">
                            <input type="text" id="text-input-todo-6" class="text-input" placeholder="Input 6"> -->
                        </form>

                </div>

                <div class="todo-all-emoji">
                    <div class="todo-emoji-label todo-label">
                        <b>Cảm xúc</b>
                    </div>

                    <form class="input-form input-form-emoji">
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-laugh-beam"></i></i></span><b>Hạnh phúc</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-smile-beam"></i></span><b>Vui vẻ</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-meh"></i></span><b>Bình thường</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-frown-open"></i></span><b>Buồn</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)"> <span class="icon-happy"><i class="fa-regular fa-face-sad-tear"></i></span><b>Rất buồn</b></button>
                        
                        <!-- <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 2</button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 3</button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 4</button>
                        <button type="button" class="btn-emoji" onclick="changeColorPink(this)">Emoji 5</button> -->
                    </form>


                </div>

                <div class="todo-all-water">
                    <div class="todo-water-label todo-label">
                        <b>Lượng nước uống</b>
                    </div>

                    <form class="input-form input-form-water">
                        <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>0.5 Lit</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>1 Lit</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>1.5 Lit</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>2 Lit</b></button>
                        <button type="button" class="btn-emoji" onclick="changeColorBlue(this)"> <span class="icon-happy"><i class="fa-solid fa-glass-water-droplet"></i></i></span><b>2.5 Lit</b></button>
                        
                    </form>

                </div>
            </div>
            
            <div class="todo-note">
                <div class="todo-note-label ">
                    <b>Ghi chú :</b>
                </div>

                
                <textarea class="todo-note-content" rows="3" cols="30" placeholder="Nhập ghi chú vào đây    "></textarea>
                
            </div>
            
            <button id="saveButton">Lưu</button>

            
        </div>
    </div>

</body>

<script>
// Function to change the color of a clicked button and reset others
function changeColorPink(selectedButton) {
    // First, get all buttons with the class 'btn-emoji'
    var buttonsEmoji = document.getElementsByClassName('btn-emoji');

    // Loop through the NodeList object and reset the background color
    for (var i = 0; i < buttonsEmoji.length; i++) {
        buttonsEmoji[i].style.backgroundColor = ''; // Reset to default or any other color
    }

    // Now change the background color of the clicked button
    selectedButton.style.backgroundColor = 'rgba(252, 159, 159, 0.55)';
}

function changeColorBlue(selectedButton) {
    // First, get all buttons with the class 'btn-emoji'
    var buttonsWater = document.getElementsByClassName('btn-water');

    // Loop through the NodeList object and reset the background color
    for (var i = 0; i < buttonsWater.length; i++) {
        buttonsWater[i].style.backgroundColor = ''; // Reset to default or any other color
    }

    // Now change the background color of the clicked button
    selectedButton.style.backgroundColor = 'rgba(122, 248, 203, 0.77)';
}
</script>



</html>

