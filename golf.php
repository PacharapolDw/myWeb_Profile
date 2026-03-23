<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>⛳Golf</title>
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
            background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%);
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
            background: url('golf-hero.jpg') center/cover;
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
            border-bottom: 3px solid #27ae60;
            font-weight: 300;
        }

        .intro-box {
            background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%);
            padding: 2rem;
            border-radius: 10px;
            border-left: 5px solid #27ae60;
            margin-bottom: 2rem;
        }

        .intro-box h3 {
            color: #27ae60;
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
            border-color: #27ae60;
            box-shadow: 0 3px 15px rgba(39, 174, 96, 0.2);
        }

        .equipment-item h4 {
            color: #27ae60;
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
            color: #27ae60;
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

        .courses-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .course-card {
            background-color: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 3px 15px rgba(0,0,0,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .course-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 6px 25px rgba(0,0,0,0.15);
        }

        .course-image {
            width: 100%;
            height: 200px;
            background-color: #e0e0e0;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 3rem;
        }

        .course-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .course-info {
            padding: 1.5rem;
        }

        .course-info h3 {
            color: #2c3e50;
            margin-bottom: 0.5rem;
            font-weight: 400;
        }

        .course-location {
            color: #27ae60;
            font-size: 0.9rem;
            margin-bottom: 1rem;
            display: flex;
            align-items: center;
            gap: 0.3rem;
        }

        .course-info p {
            color: #666;
            font-size: 0.95rem;
            line-height: 1.6;
            margin-bottom: 1rem;
        }

        .course-features {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .feature-badge {
            background-color: #e8f5e9;
            color: #27ae60;
            padding: 0.3rem 0.8rem;
            border-radius: 15px;
            font-size: 0.85rem;
            font-weight: 500;
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
            color: #27ae60;
            text-decoration: none;
            margin: 0 1rem;
            transition: color 0.3s;
        }

        .footer-links a:hover {
            color: #2ecc71;
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
            .courses-grid {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <a href="mainWeb.php" class="back-button">← กลับหน้าหลัก</a>
            <h1>⛳ คู่มือเล่นกอล์ฟเบื้องต้น</h1>
            <p>เริ่มต้นเล่นกอล์ฟอย่างถูกวิธี พร้อมเคล็ดลับและคำแนะนำจากผู้เชี่ยวชาญ</p>
        </header>

        <div class="hero-image">
            <!-- <img src="/myWeb/Image/golfbackground.png" alt="Golf Course"> -->
            <img src="Image/golfbackground.png" alt="Golf Course">
            <div style="font-size: 5rem;"></div>
        </div>

        <div class="content">
            <!-- Introduction Section -->
            <section class="section">
                <div class="intro-box">
                    <h3>🎯 กอล์ฟคืออะไร?</h3>
                    <p>
                        กอล์ฟเป็นกีฬาที่ต้องใช้ไม้กอล์ฟตีลูกบอลเข้าหลุม โดยพยายามใช้จำนวนครั้งให้น้อยที่สุด 
                        เป็นกีฬาที่ผสมผสานระหว่างทักษะทางร่างกาย ความแม่นยำ และกลยุทธ์ทางจิตใจ 
                        นอกจากนี้ยังเป็นกีฬาที่เล่นกลางแจ้งท่ามกลางธรรมชาติที่สวยงาม ช่วยผ่อนคลายและออกกำลังกายไปพร้อมกัน
                    </p>
                </div>
            </section>

            <!-- Basics Section -->
            <section class="section">
                <h2 class="section-title">📚 พื้นฐานการเล่นกอล์ฟ</h2>
                
                <div class="basics-grid">
                    <div class="basic-card">
                        <div class="basic-card-icon">🏌️</div>
                        <h3>1. ท่าตีกอล์ฟ (Stance)</h3>
                        <p>
                            การยืนที่ถูกต้องคือพื้นฐานสำคัญ เท้าควรกางกว้างเท่าไหล่ 
                            น้ำหนักกระจายเท่าๆ กัน เข่าค่อนข้างงอ และเอนตัวไปข้างหน้าเล็กน้อยจากสะโพก
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🎯</div>
                        <h3>2. การจับไม้ (Grip)</h3>
                        <p>
                            มี 3 แบบหลัก: Overlapping, Interlocking และ Baseball Grip 
                            การจับที่ดีจะช่วยควบคุมทิศทางและแรงตีได้ดีขึ้น ไม่ควรกำแน่นเกินไป
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">⚡</div>
                        <h3>3. การสวิง (Swing)</h3>
                        <p>
                            การสวิงที่ดีประกอบด้วย Backswing, Downswing และ Follow Through 
                            ควรให้เป็นการเคลื่อนไหวที่ลื่นไหลและต่อเนื่อง ไม่ใช้แรงมากเกินไป
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🎪</div>
                        <h3>4. กฎและมารยาท</h3>
                        <p>
                            กอล์ฟเน้นเรื่องมารยาท เช่น ไม่ส่งเสียงดังขณะคนอื่นตี รักษาความเร็วในการเล่น 
                            ซ่อมหลุมพรุนบนกรีน และเคารพผู้เล่นคนอื่น
                        </p>
                    </div>
                </div>
            </section>

            <!-- Video Section -->
            <section class="section">
                <h2 class="section-title">🎬 วิดีโอสอนเล่นกอล์ฟสำหรับผู้เริ่มต้น</h2>
                
                <div class="video-container">
                    <iframe 
                        src="https://www.youtube.com/embed/CN3ThL8DgFM" 
                        title="Golf Tutorial for Beginners"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen>
                    </iframe>
                </div>
                <p class="video-caption">วิดีโอแนะนำการเล่นกอล์ฟสำหรับผู้เริ่มต้น - ครอบคลุมทุกพื้นฐานที่จำเป็น</p>

                <div class="tips-box">
                    <h4>💡 เคล็ดลับในการฝึกหัด</h4>
                    <ul>
                        <li>ฝึกท่าตีที่ Driving Range ก่อนลงสนามจริง</li>
                        <li>เริ่มจากไม้สั้นๆ ก่อน เช่น Wedge หรือ Iron ตัวสูง</li>
                        <li>ฝึกการ Putt อย่างสม่ำเสมอ เพราะคิดเป็น 40% ของ Score</li>
                        <li>ดูวิดีโอซ้ำๆ และบันทึกการตีของตัวเองเพื่อปรับปรุง</li>
                        <li>อดทนและเพลิดเพลินกับกระบวนการเรียนรู้</li>
                    </ul>
                </div>
            </section>

            <!-- Equipment Section -->
            <section class="section">
                <h2 class="section-title">🏌️ อุปกรณ์กอล์ฟเบื้องต้น</h2>
                
                <div class="equipment-list">
                    <div class="equipment-item">
                        <h4>🏌️ ไม้กอล์ฟ</h4>
                        <ul>
                            <li>Driver (ไม้ยาว สำหรับตีระยะไกล)</li>
                            <li>Fairway Woods (3W, 5W)</li>
                            <li>Irons (Iron 5-9)</li>
                            <li>Wedges (PW, SW)</li>
                            <li>Putter (สำหรับตีลูกบนกรีน)</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>⚽ ลูกกอล์ฟ</h4>
                        <ul>
                            <li>ควรมีอย่างน้อย 12 ลูก</li>
                            <li>เลือกลูกที่เหมาะกับระดับ</li>
                            <li>มือใหม่ควรใช้ลูกราคาย่อมเยา</li>
                            <li>ติดเครื่องหมายจำแนกลูก</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>👕 เสื้อผ้า</h4>
                        <ul>
                            <li>เสื้อโปโลมีปก</li>
                            <li>กางเกงขายาวหรือกระโปรง</li>
                            <li>รองเท้ากอล์ฟ (มีหมุด)</li>
                            <li>หมวกหรือแว่นกันแดด</li>
                            <li>ถุงมือกอล์ฟ</li>
                        </ul>
                    </div>

                    <div class="equipment-item">
                        <h4>🎒 อุปกรณ์เสริม</h4>
                        <ul>
                            <li>กระเป๋าใส่ไม้กอล์ฟ</li>
                            <li>Tee (แท่นรองลูก)</li>
                            <li>Ball Marker</li>
                            <li>Divot Repair Tool</li>
                            <li>ผ้าเช็ดไม้และลูก</li>
                        </ul>
                    </div>
                </div>

                <div class="tips-box">
                    <h4>💰 คำแนะนำด้านงบประมาณ</h4>
                    <ul>
                        <li><strong>มือใหม่:</strong> ควรเช่าหรือซื้อชุดไม้มือสองก่อน งบประมาณ 10,000-20,000 บาท</li>
                        <li><strong>ระดับกลาง:</strong> ชุดไม้ใหม่ระดับเริ่มต้น งบประมาณ 30,000-50,000 บาท</li>
                        <li><strong>ขั้นสูง:</strong> ชุดไม้คุณภาพสูง Fitting เฉพาะบุคคล งบประมาณ 80,000+ บาท</li>
                        <li>ไม่จำเป็นต้องซื้อครบ 14 ไม้ตั้งแต่แรก เริ่มจาก 7-9 ไม้ก่อนก็เพียงพอ</li>
                    </ul>
                </div>
            </section>

            <!-- Golf Courses Section -->
            <section class="section">
                <h2 class="section-title">🏞️ สนามกอล์ฟแนะนำในประเทศไทย</h2>
                
                <div class="courses-grid">
                    <div class="course-card">
                        <a href="https://www.alpinegolfresort.com/th/" style="text-decoration: none; color: inherit; display: block;">                        
                            <div class="course-image">
                                <!-- <img src="/myWeb/Image/Alpine Chiangmai.png" alt="Alpine Golf Resort"> -->
                                <img src="Image/Alpine Chiangmai.png" alt="Alpine Golf Resort">
                        </div>
                        <div class="course-info">
                            <h3>Alpine Golf Resort Chiang Mai</h3>
                            <p class="course-location">📍 เชียงใหม่</p>
                            <p>สนามกอล์ฟที่สวยที่สุดในเอเชีย ตั้งอยู่ท่ามกลางภูเขาและธรรมชาติ มี 18 หลุม Par 72</p>
                            <div class="course-features">
                                <span class="feature-badge">Championship</span>
                                <span class="feature-badge">Mountain View</span>
                                <span class="feature-badge">Resort</span>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="course-card">
                        <a href="https://siamcountryclub.com/" style="text-decoration: none; color: inherit; display: block;">                        
                            <div class="course-image">
                                <!-- <img src="/myWeb/Image/siam country.png" alt="Siam Country Club"> -->
                                <img src="Image/siam country.png" alt="Siam Country Club">
                        </div>
                        <div class="course-info">
                            <h3>Siam Country Club</h3>
                            <p class="course-location">📍 พัทยา, ชลบุรี</p>
                            <p>สนามระดับ PGA Tour เจ้าภาพการแข่งขัน Thailand Golf Championship มี 4 สนาม 72 หลุม</p>
                            <div class="course-features">
                                <span class="feature-badge">PGA Tour</span>
                                <span class="feature-badge">4 Courses</span>
                                <span class="feature-badge">World Class</span>
                            </div>
                        </div>
                        </a>
                    </div>

                    <div class="course-card">
                        <a href="https://www.mbkgolf.com/riverdale/" style="text-decoration: none; color: inherit; display: block;">                        
                            <div class="course-image">
                                <!-- <img src="/myWeb/Image/riverdale golf.png" alt="Riverdale Golf Club"> -->
                                <img src="Image/riverdale golf.png" alt="Riverdale Golf Club">
                        </div>
                        <div class="course-info">
                            <h3>Riverdale Golf Club</h3>
                            <p class="course-location">📍 ปทุมธานี</p>
                            <p>สนามใกล้กรุงเทพฯ เหมาะสำหรับผู้เริ่มต้น มีสนาม 27 หลุม ออกแบบโดย Robert Trent Jones Jr.</p>
                            <div class="course-features">
                                <span class="feature-badge">Beginner Friendly</span>
                                <span class="feature-badge">27 Holes</span>
                                <span class="feature-badge">Near Bangkok</span>
                            </div>
                        </div>
                        </a>    
                    </div>

                </div>

                <div class="tips-box">
                    <h4>📌 เคล็ดลับการเลือกสนาม</h4>
                    <ul>
                        <li><strong>มือใหม่:</strong> เลือกสนามที่ไม่ยากเกินไป มี Driving Range และ Putting Green สำหรับฝึก</li>
                        <li><strong>ตรวจสอบราคา:</strong> Green Fee โดยทั่วไปอยู่ระหว่าง 1,000-5,000 บาท (ไม่รวมรถและแคดดี้)</li>
                        <li><strong>จองล่วงหน้า:</strong> โดยเฉพาะสนามยอดนิยมในวันเสาร์-อาทิตย์</li>
                        <li><strong>Dress Code:</strong> ตรวจสอบกฎการแต่งกายของแต่ละสนาม</li>
                        <li><strong>เวลาเล่น:</strong> 1 รอบใช้เวลาประมาณ 4-5 ชั่วโมง</li>
                    </ul>
                </div>
            </section>

            <!-- Download Section -->
            <section class="section">
                <h2 class="section-title">📥 ดาวน์โหลดเอกสาร</h2>
                
                <div style="background: linear-gradient(135deg, #e8f5e9 0%, #f1f8e9 100%); padding: 2rem; border-radius: 10px; border-left: 5px solid #27ae60; text-align: center;">
                    <div style="font-size: 4rem; margin-bottom: 1rem;">📄</div>
                    <h3 style="color: #27ae60; margin-bottom: 1rem; font-size: 1.5rem;">คู่มือกฎกีฬากอล์ฟ</h3>
                    <p style="color: #555; margin-bottom: 2rem; line-height: 1.8;">
                        ดาวน์โหลดคู่มือกฎกีฬากอล์ฟฉบับสมบูรณ์ ประกอบด้วยกฎการแข่งขัน มารยาทบนสนาม 
                        และคำแนะนำสำหรับผู้เริ่มต้น เหมาะสำหรับศึกษาและใช้อ้างอิงขณะเล่นจริง
                    </p>
                    <a href="pdf/Golf-Rules.pdf" download style="display: inline-block; background: linear-gradient(135deg, #2ecc71 0%, #27ae60 100%); color: white; padding: 1rem 3rem; text-decoration: none; border-radius: 30px; font-size: 1.1rem; font-weight: 500; box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3); transition: all 0.3s;">
                        ⬇️ ดาวน์โหลดคู่มือ (PDF)
                    </a>
                    <p style="color: #7f8c8d; margin-top: 1rem; font-size: 0.9rem;">ขนาดไฟล์: 2.5 MB | รูปแบบ: PDF | ภาษา: ไทย</p>
                </div>
            </section>

            <!-- Final Tips Section -->
            <section class="section">
                <h2 class="section-title">🌟 เคล็ดลับสำหรับผู้เริ่มต้น</h2>
                
                <div class="basics-grid">
                    <div class="basic-card">
                        <div class="basic-card-icon">🎓</div>
                        <h3>หาครูสอน</h3>
                        <p>
                            การเรียนกับโปรมืออาชีพจะช่วยให้คุณเริ่มต้นด้วยพื้นฐานที่ถูกต้อง 
                            ป้องกันการเกิดนิสัยที่ผิดพลาดซึ่งยากต่อการแก้ไขในภายหลัง
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">⏰</div>
                        <h3>ฝึกสม่ำเสมอ</h3>
                        <p>
                            ฝึกอย่างน้อยสัปดาห์ละ 2-3 ครั้ง เน้นทั้งการตียาวและ Short Game 
                            การฝึก Putting และ Chipping สำคัญไม่แพ้การตีไกล
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">🧘</div>
                        <h3>จิตใจสำคัญ</h3>
                        <p>
                            กอล์ฟคือกีฬาที่ต้องใช้สมาธิและการควบคุมอารมณ์ 
                            อย่าเครียดกับ Score ให้เพลิดเพลินและเรียนรู้จากความผิดพลาด
                        </p>
                    </div>

                    <div class="basic-card">
                        <div class="basic-card-icon">👥</div>
                        <h3>เล่นกับผู้อื่น</h3>
                        <p>
                            การเล่นกับคนที่มีประสบการณ์จะช่วยให้เรียนรู้เร็วขึ้น 
                            และยังสนุกกว่าเล่นคนเดียว สร้างเครือข่ายเพื่อนๆ ได้ด้วย
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