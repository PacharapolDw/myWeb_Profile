<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⚽Football</title>
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
            background: linear-gradient(135deg, #3498db 0%, #2980b9 100%);
            color: white;
            padding: 3rem 2rem;
            text-align: center;
            box-shadow: 0 4px 6px rgba(0,0,0,0.1);
        }

        header h1 {
            font-size: 2.5rem;
            font-weight: 300;
            margin-bottom: 0.5rem;
        }

        header p {
            font-size: 1.1rem;
            opacity: 0.95;
        }

        .back-button {
            position: absolute;
            top: 2rem;
            left: 2rem;
            background-color: rgba(255, 255, 255, 0.2);
            color: white;
            padding: 0.7rem 1.5rem;
            text-decoration: none;
            border-radius: 25px;
            transition: all 0.3s;
            font-weight: 500;
        }

        .back-button:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(-5px);
        }

        .hero-image {
            width: 100%;
            height: 300px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .hero-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 3rem 2rem;
        }

        .section {
            margin-bottom: 4rem;
            animation: fadeIn 0.6s;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .section-title {
            font-size: 2rem;
            color: #2c3e50;
            margin-bottom: 1.5rem;
            padding-bottom: 0.5rem;
            border-bottom: 3px solid #3498db;
            font-weight: 300;
        }

        .intro-box {
            background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%);
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #3498db;
            margin-bottom: 2rem;
        }

        .intro-box h3 {
            color: #2980b9;
            margin-bottom: 1rem;
            font-size: 1.3rem;
        }

        .intro-box p {
            color: #555;
            font-size: 1.05rem;
            line-height: 1.8;
        }

        .basics-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .basic-card {
            background-color: #f8f9fa;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .basic-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
        }

        .basic-card-icon {
            font-size: 3rem;
            margin-bottom: 1rem;
        }

        .basic-card h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-weight: 400;
        }

        .basic-card p {
            color: #666;
            line-height: 1.7;
        }

        .video-container {
            position: relative;
            padding-bottom: 56.25%;
            height: 0;
            overflow: hidden;
            max-width: 100%;
            background-color: #000;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.15);
        }

        .video-container iframe {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            border: none;
        }

        .video-caption {
            text-align: center;
            margin-top: 1rem;
            color: #666;
            font-style: italic;
        }

        .equipment-list {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 1.5rem;
            margin-top: 2rem;
        }

        .equipment-item {
            background-color: white;
            border: 2px solid #e0e0e0;
            padding: 1.5rem;
            border-radius: 8px;
            transition: all 0.3s;
        }

        .equipment-item:hover {
            border-color: #3498db;
            box-shadow: 0 3px 15px rgba(52, 152, 219, 0.2);
        }

        .equipment-item h4 {
            color: #3498db;
            margin-bottom: 0.8rem;
            font-size: 1.1rem;
        }

        .equipment-item ul {
            list-style: none;
            padding-left: 0;
        }

        .equipment-item li {
            padding: 0.5rem 0;
            color: #555;
            border-bottom: 1px solid #f0f0f0;
        }

        .equipment-item li:last-child {
            border-bottom: none;
        }

        .equipment-item li:before {
            content: "✓ ";
            color: #3498db;
            font-weight: bold;
            margin-right: 0.5rem;
        }

        .tips-box {
            background-color: #fff3cd;
            border-left: 5px solid #ffc107;
            padding: 1.5rem;
            margin: 1.5rem 0;
            border-radius: 5px;
        }

        .tips-box h4 {
            color: #856404;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .tips-box ul {
            color: #856404;
            padding-left: 1.5rem;
        }

        .tips-box li {
            margin: 0.5rem 0;
        }

        .venues-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .venue-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .venue-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 25px rgba(0,0,0,0.15);
        }

        .venue-image {
            width: 100%;
            height: 200px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .venue-info {
            padding: 1.5rem;
        }

        .venue-info h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .venue-location {
            color: #3498db;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .venue-info p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .feature-badge {
            background-color: #e3f2fd;
            color: #2980b9;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
            display: inline-block;
            margin: 0.2rem;
        }

        footer {
            background-color: #2c3e50;
            color: white;
            text-align: center;
            padding: 2rem;
            margin-top: 3rem;
        }

        .footer-links {
            margin-top: 1rem;
        }

        .footer-links a {
            color: #3498db;
            text-decoration: none;
            margin: 0 1rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #5dade2;
        }

        @media (max-width: 768px) {
            header {
                padding: 2rem 1rem;
            }

            header h1 {
                font-size: 1.8rem;
            }

            .back-button {
                position: static;
                display: inline-block;
                margin-bottom: 1rem;
            }

            .content {
                padding: 2rem 1rem;
            }

            .section-title {
                font-size: 1.5rem;
            }

            .basics-grid,
            .equipment-list,
            .venues-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="mainWeb.php" class="back-button">← กลับหน้าหลัก</a>
            <h1>⚽ คู่มือเล่นฟุตบอลเบื้องต้น</h1>
            <p>เรียนรู้พื้นฐานฟุตบอล พร้อมเทคนิคและคำแนะนำจากผู้เชี่ยวชาญ</p>
        </header>

        <div class="hero-image">
            <!-- <img src="/myWeb/Image/footballbackground.png" alt="Golf Course"> -->
            <img src="Image/footballbackground.png" alt="Golf Course">
            <div style="font-size: 5rem;"></div>
        </div>

        <div class="content">
            <!-- Introduction Section -->
            <section class="section">
                <div class="intro-box">
                    <h3>🎯 ฟุตบอลคืออะไร?</h3>
                    <p>
                        ฟุตบอลเป็นกีฬาที่ได้รับความนิยมมากที่สุดในโลก เล่นโดยใช้เท้าเตะลูกบอลเข้าประตูของฝ่ายตรงข้าม 
                        เป็นกีฬาที่เน้นการทำงานเป็นทีม ความคล่องแคล่ว ความแม่นยำ และกลยุทธ์ 
                        นอกจากเป็นกีฬาที่สนุกแล้ว ยังช่วยพัฒนาสมรรถภาพทางกาย สร้างมิตรภาพ และน้ำใจนักกีฬา
                    </p>
                </div>
            </section>

            <!-- Basics Section -->
            <section class="section">
                <h2 class="section-title">📚 พื้นฐานการเล่นฟุตบอล</h2>
                
                <div class="basics-grid">
                    <div class="basic-card">
                        <div class="basic-card-icon">⚽</div>
                        <h3>1. การเตะลูก</h3>
                        <p>
                            ใช้หลังเท้า ด้านใน หรือด้านนอกเท้าในการเตะ ขึ้นอยู่กับสถานการณ์ 
                            การเตะที่ดีต้องแม่นยำ มีแรง และควบคุมทิศทางได้
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🏃</div>
                        <h3>2. การดริบเบิล</h3>
                        <p>
                            การควบคุมลูกบอลขณะวิ่ง ใช้ด้านในและด้านนอกเท้าสลับกัน 
                            ลูกควรอยู่ใกล้ตัวเพื่อควบคุมได้ดี แต่ไม่ใกล้จนเกินไป
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🎯</div>
                        <h3>3. การส่งบอล</h3>
                        <p>
                            ใช้ด้านในเท้าสำหรับส่งบอลสั้นที่แม่นยำ หรือหลังเท้าสำหรับส่งบอลยาว 
                            ดูตำแหน่งเพื่อนร่วมทีมก่อนส่ง
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🥅</div>
                        <h3>4. การยิงประตู</h3>
                        <p>
                            เตะลูกด้วยหลังเท้าเพื่อแรงและความแม่นยำ เล็งมุมประตู 
                            ไม่จำเป็นต้องใช้แรงมาก แต่ต้องแม่นยำและทันท่วงที
                        </p>
                    </div>
                </div>
            </section>

            <!-- Video Section -->
            <section class="section">
                <h2 class="section-title">🎬 วิดีโอสอนเล่นฟุตบอลสำหรับผู้เริ่มต้น</h2>
                
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/5fl248V4tIU" 
                        title="Football Tutorial for Beginners"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="video-caption">วิดีโอแนะนำทักษะฟุตบอลพื้นฐาน - เหมาะสำหรับผู้เริ่มต้น</p>

                <div class="tips-box">
                    <h4>💡 เคล็ดลับในการฝึกหัด</h4>
                    <ul>
                        <li>ฝึกเตะลูกกับกำแพงเพื่อพัฒนาความแม่นยำและควบคุมลูก</li>
                        <li>ฝึกดริบเบิลรอบกรวยหรือสิ่งกีดขวาง</li>
                        <li>เล่นเกมขนาดเล็ก (Small-sided games) เพื่อพัฒนาทักษะ</li>
                        <li>ดูการแข่งขันฟุตบอลระดับมืออาชีพเพื่อเรียนรู้กลยุทธ์</li>
                        <li>อดทนและฝึกซ้ำๆ ทักษะจะดีขึ้นตามเวลา</li>
                    </ul>
                </div>
            </section>

            <!-- Equipment Section -->
            <section class="section">
                <h2 class="section-title">👟 อุปกรณ์ฟุตบอลเบื้องต้น</h2>
                
                <div class="equipment-list">
                    <div class="equipment-item">
                        <h4>⚽ ลูกฟุตบอล</h4>
                        <ul>
                            <li>ขนาด 5 (มาตรฐาน)</li>
                            <li>เลือกลูกคุณภาพดี</li>
                            <li>สำหรับสนามหญ้าหรือสนามปูน</li>
                            <li>ตรวจสอบแรงดันลม</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>👟 รองเท้าฟุตบอล</h4>
                        <ul>
                            <li>Cleats สำหรับสนามหญ้า</li>
                            <li>Futsal Shoes สำหรับสนามปูน</li>
                            <li>เลือกให้พอดีกับเท้า</li>
                            <li>น้ำหนักเบาและยึดเกาะดี</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>👕 ชุดกีฬา</h4>
                        <ul>
                            <li>เสื้อกีฬาระบายอากาศ</li>
                            <li>กางเกงขาสั้นสบาย</li>
                            <li>ถุงเท้ายาว</li>
                            <li>สนับแข้ง (Shin Guards)</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>🎒 อุปกรณ์เสริม</h4>
                        <ul>
                            <li>ถุงใส่รองเท้า</li>
                            <li>ขวดน้ำ</li>
                            <li>ผ้าเช็ดหน้า</li>
                            <li>ปลอกแขนกัปตัน (ถ้าเป็นหัวหน้าทีม)</li>
                        </ul>
                    </div>
                </div>

                <div class="tips-box">
                    <h4>💰 คำแนะนำด้านงบประมาณ</h4>
                    <ul>
                        <li><strong>มือใหม่:</strong> ชุดเริ่มต้น ลูกบอล + รองเท้า + อุปกรณ์ ประมาณ 2,000-3,000 บาท</li>
                        <li><strong>ระดับกลาง:</strong> อุปกรณ์คุณภาพดีขึ้น ประมาณ 4,000-6,000 บาท</li>
                        <li><strong>ขั้นสูง:</strong> อุปกรณ์แบรนด์เนม มืออาชีพ 8,000+ บาท</li>
                        <li>สนับแข้งสำคัญมาก ห้ามประมาท ป้องกันการบาดเจ็บ</li>
                    </ul>
                </div>
            </section>

            <!-- Venues Section -->
            <section class="section">
                <h2 class="section-title">🏟️ สนามฟุตบอลแนะนำ</h2>
                
                <div class="venues-grid">
                    <div class="venue-card">
                        <!-- <div class="venue-image"><img src="/myWeb/Image/polo football park.png" style="width:100%; border-radius:8px; margin:10px 0;"></div> -->
                        <div class="venue-image"><img src="Image/polo football park.png" style="width:100%; border-radius:8px; margin:10px 0;"></div>
                        <div class="venue-info">
                            <h3> สนาม Polo Football Park</h3>
                            <p class="venue-location">📍 กรุงเทพฯ</p>
                            <p>สนามฟุตบอลกลางแจ้งในสวนสาธารณะ บรรยากาศดี เหมาะสำหรับเล่นตอนเช้า-เย็น</p>
                            <div>
                                <span class="feature-badge">สนามมาตรฐาน</span>
                                <span class="feature-badge">ราคาปานกลาง</span>
                                <span class="feature-badge">อยู่ใจกลางเมือง</span>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <!-- <div class="venue-image"><img src="/myWeb/Image/grand soccer pro.png" style="width:100%; border-radius:8px; margin:10px 0;"></div> -->
                        <div class="venue-image"><img src="Image/grand soccer pro.png" style="width:100%; border-radius:8px; margin:10px 0;"></div>
                        <div class="venue-info">
                            &nbsp;
                            <h3>สนาม Grand Soccer Pro Kaset-Nawamin</h3>
                            <p class="venue-location">📍 กรุงเทพ</p>
                            <p>สนามในมหาวิทยาลัยต่างๆ มักเปิดให้บุคคลภายนอกเช่าได้ ราคาไม่แพง</p>
                            <div>
                                <span class="feature-badge">ราคาเข้าถึงได้ทุกระดับ</span>
                                <span class="feature-badge">สนามมาตรฐาน</span>
                                <span class="feature-badge">จองง่าย</span>
                            </div>
                        </div>
                    </div>

                    <div class="venue-card">
                        <!-- <div class="venue-image"><img src="/myWeb/Image/green field.png" style="width:100%; border-radius:8px; margin:10px 0;"></div> -->
                        <div class="venue-image"><img src="Image/green field.png" style="width:100%; border-radius:8px; margin:10px 0;"></div>
                        <div class="venue-info">
                            <h3>สนาม Green Field</h3>
                            <p class="venue-location">📍 กรุงเทพ</p>
                            <p>สนามขนาดเล็กในชุมชน เหมาะสำหรับเล่นกับเพื่อนๆ ราคาถูก บรรยากาศสบายๆ</p>
                            <div>
                                <span class="feature-badge">ราคาอาจจะสูง</span>
                                <span class="feature-badge">สนามมาตรฐาน</span>
                                <span class="feature-badge">สนามกลางแจ้ง</span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tips-box">
                    <h4>📌 เคล็ดลับการเลือกสนาม</h4>
                    <ul>
                        <li><strong>สนามหญ้า:</strong> เหมาะสำหรับการเล่นแบบ 11 คน เตะได้สนุกแต่ต้องดูแลรักษา</li>
                        <li><strong>สนามฟุตซอล:</strong> เหมาะสำหรับ 5-7 คน เน้นทักษะ ไม่กลัวฝน</li>
                        <li><strong>ราคา:</strong> สนามทั่วไปประมาณ 300-1,500 บาท/ชั่วโมง ขึ้นอยู่กับขนาดและสิ่งอำนวยความสะดวก</li>
                        <li><strong>จองล่วงหน้า:</strong> โดยเฉพาะช่วงเย็นและวันหยุด</li>
                        <li><strong>เช็คสิ่งอำนวยความสะดวก:</strong> ห้องน้ำ ห้องแต่งตัว ที่จอดรถ</li>
                    </ul>
                </div>
            </section>

            <!-- Download Section -->
            <section class="section">
                <h2 class="section-title">📥 ดาวน์โหลดเอกสาร</h2>
                
                <div style="background: linear-gradient(135deg, #e3f2fd 0%, #bbdefb 100%); padding: 2rem; border-radius: 10px; border-left: 5px solid #3498db; text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📄</div>
                    <h3 style="color: #2980b9; margin-bottom: 1rem; font-size: 1.5rem;">คู่มือกฎกีฬาฟุตบอล</h3>
                    <p style="color: #555; margin-bottom: 2rem; line-height: 1.8;">
                        ดาวน์โหลดคู่มือกฎกีฬาฟุตบอลฉบับสมบูรณ์ ประกอบด้วยกฎการแข่งขัน ตำแหน่งผู้เล่น 
                        และคำแนะนำสำหรับผู้เริ่มต้น เหมาะสำหรับศึกษาและใช้อ้างอิงขณะเล่นจริง
                    </p>
                    <!-- <a href="/myWeb/pdf/Football-Rules.pdf" download style="display: inline-block; background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); color: white; padding: 1rem 3rem; text-decoration: none; border-radius: 30px; font-size: 1.1rem; font-weight: 500; box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3); transition: all 0.3s;"> -->
                    <a href="pdf/Football-Rules.pdf" download style="display: inline-block; background: linear-gradient(135deg, #3498db 0%, #2980b9 100%); color: white; padding: 1rem 3rem; text-decoration: none; border-radius: 30px; font-size: 1.1rem; font-weight: 500; box-shadow: 0 4px 15px rgba(52, 152, 219, 0.3); transition: all 0.3s;">
                        ⬇️ ดาวน์โหลดคู่มือ (PDF)
                    </a>
                    <p style="color: #7f8c8d; margin-top: 1rem; font-size: 0.9rem;">ขนาดไฟล์: 2.8 MB | รูปแบบ: PDF | ภาษา: ไทย</p>
                </div>
            </section>

            <!-- Final Tips Section -->
            <section class="section">
                <h2 class="section-title">🌟 เคล็ดลับสำหรับผู้เริ่มต้น</h2>
                
                <div class="basics-grid">
                    <div class="basic-card">
                        <div class="basic-card-icon">💪</div>
                        <h3>สร้างสมรรถภาพ</h3>
                        <p>
                            ฟุตบอลต้องใช้ความแข็งแรงและความทนทาน วิ่งและออกกำลังกายเสริม 
                            ยืดกล้ามเนื้อก่อน-หลังเล่นเสมอ
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🎓</div>
                        <h3>เรียนรู้กลยุทธ์</h3>
                        <p>
                            นอกจากทักษะ ยังต้องเข้าใจกลยุทธ์และตำแหน่งต่างๆ 
                            ดูการแข่งขันและเรียนรู้การเคลื่อนไหวของผู้เล่นมืออาชีพ
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">👥</div>
                        <h3>เล่นเป็นทีม</h3>
                        <p>
                            ฟุตบอลคือกีฬาทีม ต้องรู้จักส่งบอล สื่อสาร และช่วยเหลือเพื่อนร่วมทีม 
                            ไม่ใช่การเล่นคนเดียว
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🏃</div>
                        <h3>ฝึกสม่ำเสมอ</h3>
                        <p>
                            ทักษะฟุตบอลต้องใช้เวลาในการพัฒนา ฝึกอย่างน้อยสัปดาห์ละ 2-3 ครั้ง 
                            จะเห็นความก้าวหน้าชัดเจน
                        </p>
                    </div>
                </div>
            </section>
        </div>

        <footer>
            <p>&copy; 2024 Pacharapol Dawmukda </p>
        </footer>
    </div>
</body>
</html>