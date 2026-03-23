<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homepage</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f5f5f5;
            color: #333;
            line-height: 1.6;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            background-color: white;
            min-height: 100vh;
        }

        header {
            background-color: #2c3e50;
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            position: relative;
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.9;
        }

        nav {
            background-color: #34495e;
            padding: 0;
            display: flex;
            justify-content: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        nav button {
            background-color: transparent;
            color: white;
            border: none;
            padding: 1rem 2rem;
            cursor: pointer;
            font-size: 1rem;
            transition: background-color 0.3s;
            border-bottom: 3px solid transparent;
        }

        nav button:hover {
            background-color: #2c3e50;
        }

        nav button.active {
            background-color: #2c3e50;
            border-bottom: 3px solid #3498db;
        }

        .content {
            padding: 3rem 2rem;
        }

        .tab-content {
            display: none;
            animation: fadeIn 0.5s;
        }

        .tab-content.active {
            display: block;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .welcome-section {
            text-align: center;
            padding: 2rem 0;
        }

        .profile-photo {
            margin-bottom: 2rem;
            display: flex;
            justify-content: center;
            animation: fadeIn 0.8s;
        }

        .profile-photo img {
            width: 280px;
            height: 280px;
            border-radius: 50%;
            object-fit: cover;
            border: 5px solid #3498db;
            box-shadow: 0 8px 24px rgba(0,0,0,0.15);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .profile-photo img:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 32px rgba(52, 152, 219, 0.3);
        }

        .welcome-section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #2c3e50;
            font-weight: 300;
        }

        .welcome-section p {
            font-size: 1.2rem;
            color: #7f8c8d;
            max-width: 600px;
            margin: 0 auto;
        }

        .profile-section h2,
        .sports-section h2,
        .about-section h2 {
            font-size: 2rem;
            margin-bottom: 2rem;
            color: #2c3e50;
            font-weight: 300;
            border-bottom: 2px solid #ecf0f1;
            padding-bottom: 1rem;
        }

        .info-grid {
            display: grid;
            grid-template-columns: 1fr;
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .info-item {
            padding: 1.5rem;
            background-color: #f8f9fa;
            border-left: 4px solid #3498db;
            border-radius: 4px;
        }

        .info-item h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .info-item p {
            color: #555;
        }

        .sports-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .sport-card {
            background-color: #f8f9fa;
            border-radius: 8px;
            text-align: center;
            transition: transform 0.3s, box-shadow 0.3s;
            overflow: hidden;
        }

        .sport-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        .sport-image-container {
            width: 100%;
            height: 800px;
            background-color: #e0e0e0;
            border-bottom: 3px solid #3498db;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .sport-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .sport-card:hover .sport-image {
            transform: scale(1.05);
        }

        .sport-card h3 {
            color: #2c3e50;
            margin: 1.5rem 0 1rem 0;
            font-weight: 400;
            padding: 0 1rem;
        }

        .sport-card p {
            color: #555;
            font-size: 0.95rem;
            padding: 0 2rem 2rem 2rem;
        }

        /* Map Container */
        .map-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background-color: #e0e0e0;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
            margin: 2rem 0;
        }

        .map-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 1.5rem;
            margin-top: 3rem;
        }

        @media (max-width: 768px) {
            nav {
                flex-direction: column;
            }

            nav button {
                width: 100%;
            }

            header {
                padding: 2rem 1rem;
            }

            header h1 {
                font-size: 1.8rem;
            }

            header p {
                font-size: 1rem;
            }

            .content {
                padding: 2rem 1rem;
            }

            .profile-photo img {
                width: 200px;
                height: 200px;
            }

            .welcome-section h2 {
                font-size: 1.5rem;
            }

            .welcome-section p {
                font-size: 1rem;
            }
        }

        @media (min-width: 769px) and (max-width: 1200px) {
            .content {
                padding: 3rem 2rem;
            }
        }

        @media (min-width: 1201px) {
            .content {
                padding: 3rem 4rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <h1>📍 Welcome to my homepage 📍</h1>
            <p>ยินดีต้อนรับสู่เว็บไซต์ของฉัน</p>
        </header>

        <nav>
            <button class="tab-btn active" onclick="openTab(event, 'main')">เมนูหลัก</button>
            <button class="tab-btn" onclick="openTab(event, 'profile')">โปรไฟล์</button>
            <button class="tab-btn" onclick="openTab(event, 'sports')">กีฬา</button>
            <button class="tab-btn" onclick="openTab(event, 'about')">เกี่ยวกับเรา</button>
        </nav>

        <div class="content">
            <!-- Main Menu Tab -->
            <div id="main" class="tab-content active">
                <div class="welcome-section">
                    <div class="profile-photo">
                <!--  <img src="myWeb/Image/Boat.png" alt="รูปโปรไฟล์ พชรพล ดาวมุกดา"> -->
                    <img src="Image/Boat.png" alt="รูปโปรไฟล์ พชรพล ดาวมุกดา">
                </div>
                    <h2>สวัสดีครับ</h2>
                    <p>ผมชื่อ พชรพล ดาวมุกดา ชื่อเล่น โบ๊ท ยินดีที่ได้รู้จักนะครับ 😄<br>
                    เว็บไซต์นี้เป็นการแนะนำตัวและกีฬาที่ผมชื่นชอบมากของผมนะครับ 🚀</p>
                </div>
            </div>

            <!-- Profile Tab -->
            <div id="profile" class="tab-content">
                <div class="profile-section">
                    <h2>โปรไฟล์ส่วนตัว</h2>
                    
                    <div class="info-grid">
                        <div class="info-item">
                            <h3>ชื่อ</h3>
                            <p>นายพชรพล ดาวมุกดา</p>
                        </div>
                        
                        <div class="info-item">
                            <h3>ชื่อเล่น</h3>
                            <p>โบ๊ท</p>
                        </div>

                        <div class="info-item">
                            <h3>การศึกษา</h3>
                            <p>มัธยม: โรงเรียนอัสสัมชัญศรีราชา</p>
                            <p>มหาลัย (ป.ตรี): มหาวิทยาลัยเทคโนโลยีพระจอมเกล้าธนบุรี</p>
                            <p>มหาลัย (ป.โท): สถาบันเทคโนโลยีพระจอมเกล้าเจ้าคุณทหารลาดกระบัง (กำลังศึกษา)</p>
                        </div>
                        
                        <div class="info-item">
                            <h3>สิ่งที่ชื่นชอบ</h3>
                            <p>กีฬา, เทคโนโลยี และ กีฬา Extreme</p>
                        </div>
                        
                        <div class="info-item">
                            <h3>Skills</h3>
                            <p>1. Python</p>
                            <p>2. HTML & CSS</p>
                            <p>3. PHP</p>
                            <p>4. Command Bash Shell</p>
                            <p>5. Operational Technology</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Sports Tab -->
            <div id="sports" class="tab-content">
                <div class="sports-section">
                    <h2>กีฬา</h2>
                    
                    <div class="sports-grid">
                        <a href="golf.php" style="text-decoration: none; color: inherit; display: block;">                        
                            <div class="sport-card">
                                <div class="sport-image-container">
                                <!--    <img src="/myWeb/Image/golf.png" alt="Golf" class="sport-image"> -->
                                    <img src="Image/golf.png" alt="Golf" class="sport-image">
                                </div>
                                <h3>⛳ กอล์ฟ</h3>
                                <p>กีฬาที่ต้องใช้ความแม่นยำ ความอดทน และทักษะ เป็นการผสมผสานระหว่างความสามารถทางร่างกายกับกลยุทธ์ทางจิตใจในสนามที่สวยงาม</p>
                            </div>
                        </a>    
                        
                        <a href="football.php" style="text-decoration: none; color: inherit; display: block;">
                            <div class="sport-card">
                                <div class="sport-image-container">
                                <!--    <img src="/myWeb/Image/football.png" alt="Football" class="sport-image"> -->
                                    <img src="Image/football.png" alt="Football" class="sport-image">
                                </div>
                                <h3>⚽ ฟุตบอล</h3>
                                <p>กีฬาที่ได้รับความนิยมมากที่สุดในโลก เน้นการทำงานเป็นทีม ความคล่องตัว และความแม่นยำ เหมาะสำหรับการสร้างความทนทานและการประสานงาน</p>
                            </div>
                        </a>    
                    </div>
                </div>
            </div>

            <!-- About Us Tab -->
            <div id="about" class="tab-content">
                <div class="about-section">
                    <h2>เกี่ยวกับเรา</h2>
                    <div class="info-grid">
                        <div class="info-item">
                            <h3>📋 เกี่ยวกับเว็บไซต์</h3>
                            <p>เป็นการออกแบบเว็บไซต์ที่เป็นการแนะนำกีฬาที่ผมชื่นชอบมากครับ!</p>
                        </div>
                        <div class="info-item">
                            <h3>🎯 วัตถุประสงค์</h3>
                            <p>1. เพื่อฝึกการออกแบบเว็บไซต์</p>
                            <p>2. เพื่อฝึกการเรียนรู้การใช้ภาษาเขียนโปรแกรม</p>
                            <p>3. เพื่อเป็นการเข้าใจของการทำงานโปรแกรม</p>
                        </div>                        
                        <div class="info-item">
                            <h3>🎯 พันธกิจ</h3>
                            <p>แบ่งปันความรู้และประสบการณ์เกี่ยวกับกีฬาต่างๆ เพื่อส่งเสริมสุขภาพที่ดี</p>
                        </div>
                        <div class="info-item">
                            <h3>📧 ติดต่อเรา</h3>
                            <p>RTARF CYBER COMMAND</p>
                            <p>pacharapol.d@rtarf.mi.th</p>
                        </div>
                    </div>

                    <div style="margin-top: 3rem;">
                        <h3 style="font-size: 1.5rem; color: #2c3e50; margin-bottom: 1rem; font-weight: 300;">📍 ที่อยู่ของเรา</h3>
                        <div class="map-container">
                            <iframe 
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.3882!2d100.5625733!3d13.8862517!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e283a6705d561d%3A0x8fd5ba83c1e3b328!2z...!5e0!3m2!1sth!2sth" 
                                allowfullscreen="" 
                                loading="lazy" 
                                referrerpolicy="no-referrer-when-downgrade">
                            </iframe>
                        </div>
                        <p style="text-align: center; color: #7f8c8d; margin-top: 1rem; font-size: 1rem;">
                            กองบัญชาการกองทัพไทย (RTARF)<br>
                            127 ซอย แจ้งวัฒนะ 7 แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพมหานคร 10210
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <footer>
            <p>&copy; 2024 Pacharapol Dawmukda.</p>
        </footer>
    </div>

    <script>
        function openTab(evt, tabName) {
            // Hide all tab contents
            var tabContents = document.getElementsByClassName("tab-content");
            for (var i = 0; i < tabContents.length; i++) {
                tabContents[i].classList.remove("active");
            }

            // Remove active class from all buttons
            var tabButtons = document.getElementsByClassName("tab-btn");
            for (var i = 0; i < tabButtons.length; i++) {
                tabButtons[i].classList.remove("active");
            }

            // Show selected tab and add active class to button
            document.getElementById(tabName).classList.add("active");
            evt.currentTarget.classList.add("active");
        }
    </script>
</body>
</html>