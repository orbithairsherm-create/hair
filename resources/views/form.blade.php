<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>ORBIT Hair Serum</title>


    <style>

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }


        body {
            font-family: Arial, sans-serif;
            background: #f5f8f3;
            color: #26352b;
            line-height: 1.6;
        }


        .container {
            width: 90%;
            max-width: 1150px;
            margin: auto;
        }



        /* =====================================================
           BRAND
        ===================================================== */

        .brand {
            text-align: center;
            padding: 35px 0 25px;
        }


        .brand h1 {
            font-size: 38px;
            color: #285437;
            letter-spacing: 5px;
        }


        .brand p {
            color: #777;
            font-size: 14px;
            margin-top: 5px;
        }



        /* =====================================================
           PRODUCT SECTION
        ===================================================== */

        .product {
            background: white;
            border-radius: 22px;
            padding: 45px;

            display: flex;
            align-items: center;

            gap: 60px;

            margin-bottom: 35px;

            box-shadow: 0 8px 30px rgba(0, 0, 0, 0.07);
        }


        .product-image {
            width: 45%;
            text-align: center;
        }


        .product-image img {
            width: 100%;
            max-width: 380px;
            height: 430px;

            object-fit: contain;
        }


        .product-content {
            width: 55%;
        }


        .small-title {
            color: #a27d32;
            font-size: 15px;
            font-weight: bold;
            letter-spacing: 1px;

            margin-bottom: 8px;
        }


        .product-content h2 {
            font-size: 42px;
            color: #285437;

            margin-bottom: 12px;
        }


        .tagline {
            font-size: 20px;
            font-weight: bold;

            color: #4b5e50;

            margin-bottom: 18px;
        }


        .product-description {
            color: #666;

            font-size: 15px;

            line-height: 1.9;

            margin-bottom: 22px;
        }



        /* =====================================================
           PRODUCT BENEFITS
        ===================================================== */

        .benefits {
            margin-top: 15px;
        }


        .benefit {
            display: flex;
            align-items: center;

            gap: 10px;

            margin-bottom: 11px;

            color: #405047;

            font-size: 15px;
        }


        .benefit span {
            font-size: 17px;
        }



        /* =====================================================
           COMMON SECTION
        ===================================================== */

        .section {
            background: white;

            border-radius: 20px;

            padding: 35px;

            margin-bottom: 30px;

            box-shadow: 0 6px 25px rgba(0, 0, 0, 0.05);
        }


        .section-title {
            text-align: center;

            color: #285437;

            font-size: 28px;

            margin-bottom: 12px;
        }


        .section-subtitle {
            text-align: center;

            color: #777;

            font-size: 14px;

            margin-bottom: 28px;
        }



        /* =====================================================
           ABOUT
        ===================================================== */

        .about-text {
            max-width: 850px;

            margin: auto;

            text-align: center;

            color: #666;

            font-size: 15px;

            line-height: 1.9;
        }



        /* =====================================================
           WHY ORBIT
        ===================================================== */

        .cards {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }


        .card {
            background: #f5f8f3;

            border-radius: 15px;

            padding: 25px;

            text-align: center;
        }


        .card-icon {
            font-size: 35px;

            margin-bottom: 12px;
        }


        .card h3 {
            color: #285437;

            font-size: 18px;

            margin-bottom: 8px;
        }


        .card p {
            color: #666;

            font-size: 14px;

            line-height: 1.7;
        }



        /* =====================================================
           HAIR BENEFITS
        ===================================================== */

        .benefit-grid {
            display: grid;

            grid-template-columns: repeat(2, 1fr);

            gap: 15px;
        }


        .benefit-box {
            border: 1px solid #e3e9e2;

            border-radius: 12px;

            padding: 18px;

            display: flex;

            gap: 12px;

            align-items: flex-start;
        }


        .benefit-box .icon {
            font-size: 24px;
        }


        .benefit-box h3 {
            color: #285437;

            font-size: 16px;

            margin-bottom: 4px;
        }


        .benefit-box p {
            color: #777;

            font-size: 13px;
        }



        /* =====================================================
           INGREDIENTS
        ===================================================== */

        .ingredients {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 15px;
        }


        .ingredient {
            background: #f1f6f1;

            padding: 18px 10px;

            border-radius: 12px;

            text-align: center;

            color: #285437;

            font-weight: bold;

            font-size: 14px;
        }



        /* =====================================================
           HOW TO USE
        ===================================================== */

        .steps {
            display: grid;

            grid-template-columns: repeat(3, 1fr);

            gap: 20px;
        }


        .step {
            text-align: center;

            padding: 20px;
        }


        .step-number {
            width: 45px;
            height: 45px;

            border-radius: 50%;

            background: #285437;

            color: white;

            display: flex;

            align-items: center;

            justify-content: center;

            margin: 0 auto 12px;

            font-weight: bold;
        }


        .step h3 {
            color: #285437;

            margin-bottom: 7px;

            font-size: 17px;
        }


        .step p {
            color: #777;

            font-size: 14px;
        }



        /* =====================================================
           SUITABLE FOR
        ===================================================== */

        .suitable {
            display: flex;

            justify-content: center;

            flex-wrap: wrap;

            gap: 12px;
        }


        .suitable-item {
            background: #285437;

            color: white;

            padding: 11px 22px;

            border-radius: 30px;

            font-size: 14px;
        }



        /* =====================================================
           PRODUCT HIGHLIGHTS
        ===================================================== */

        .highlights {
            display: grid;

            grid-template-columns: repeat(4, 1fr);

            gap: 15px;

            text-align: center;
        }


        .highlight {
            padding: 20px 10px;

            background: #f7f9f6;

            border-radius: 12px;
        }


        .highlight strong {
            display: block;

            color: #285437;

            font-size: 16px;

            margin-bottom: 5px;
        }


        .highlight span {
            color: #777;

            font-size: 13px;
        }



        /* =====================================================
           PRICE IMAGE
        ===================================================== */

        .price-image {
            text-align: center;

            margin: 25px 0 30px;
        }


        .price-image img {
            width: 100%;

            max-width: 500px;

            height: auto;

            display: block;

            margin: auto;

            border-radius: 15px;
        }



        /* =====================================================
           ORDER FORM
        ===================================================== */

        .form-box {
            max-width: 650px;

            margin: auto;
        }


        .form-group {
            margin-bottom: 18px;
        }


        .form-group label {
            display: block;

            color: #333;

            font-size: 14px;

            font-weight: bold;

            margin-bottom: 7px;
        }


        .form-group input,
        .form-group textarea {
            width: 100%;

            padding: 13px 14px;

            border: 1px solid #ddd;

            border-radius: 8px;

            outline: none;

            font-family: Arial, sans-serif;

            font-size: 14px;
        }


        .form-group input:focus,
        .form-group textarea:focus {
            border-color: #285437;

            box-shadow: 0 0 0 3px rgba(40, 84, 55, 0.08);
        }


        .form-group textarea {
            height: 110px;

            resize: vertical;
        }


        .submit-btn {
            width: 100%;

            padding: 14px;

            background: #285437;

            color: white;

            border: none;

            border-radius: 8px;

            font-size: 15px;

            font-weight: bold;

            cursor: pointer;

            transition: 0.3s;
        }


        .submit-btn:hover {
            background: #1d4029;

            transform: translateY(-1px);
        }



        /* =====================================================
           FOOTER
        ===================================================== */

        .footer {
            background: #1f3d29;

            color: white;

            margin-top: 40px;

            padding: 50px 30px 20px;

            border-radius: 20px 20px 0 0;
        }


        .footer-container {
            max-width: 1100px;

            margin: auto;

            display: grid;

            grid-template-columns: 1.5fr 1fr 1fr;

            gap: 35px;
        }


        .footer-logo h2 {
            font-size: 29px;

            letter-spacing: 4px;

            margin-bottom: 12px;
        }


        .footer-logo p {
            color: #d6dfd8;

            font-size: 14px;

            line-height: 1.8;

            max-width: 290px;
        }


        .footer-column h3 {
            font-size: 17px;

            margin-bottom: 15px;

            color: white;
        }


        .footer-column p {
            color: #d6dfd8;

            font-size: 14px;

            margin-bottom: 9px;
        }


        .footer-column a {
            display: block;

            color: #d6dfd8;

            text-decoration: none;

            font-size: 14px;

            margin-bottom: 9px;

            transition: 0.3s;
        }


        .footer-column a:hover {
            color: white;

            padding-left: 5px;
        }


        .social-links {
            display: flex;

            gap: 10px;

            margin-top: 18px;
        }


        .social-links a {
            width: 38px;

            height: 38px;

            display: flex;

            align-items: center;

            justify-content: center;

            background: rgba(255,255,255,0.1);

            border-radius: 50%;

            color: white;

            text-decoration: none;

            font-size: 16px;

            transition: 0.3s;
        }


        .social-links a:hover {
            background: rgba(255,255,255,0.2);

            transform: translateY(-3px);

            padding-left: 0;
        }


        .footer-bottom {
            max-width: 1100px;

            margin: 35px auto 0;

            padding-top: 18px;

            border-top: 1px solid rgba(255,255,255,0.15);

            text-align: center;

            color: #c9d4cc;

            font-size: 13px;
        }



        /* =====================================================
           TABLET
        ===================================================== */

        @media (max-width: 850px) {

            .product {
                gap: 30px;

                padding: 30px;
            }


            .product-content h2 {
                font-size: 34px;
            }


            .product-image img {
                height: 350px;
            }


            .cards {
                grid-template-columns: repeat(2, 1fr);
            }


            .ingredients {
                grid-template-columns: repeat(2, 1fr);
            }


            .highlights {
                grid-template-columns: repeat(2, 1fr);
            }


            .footer-container {
                grid-template-columns: repeat(2, 1fr);
            }

        }



        /* =====================================================
           MOBILE
        ===================================================== */

        @media (max-width: 700px) {

            .container {
                width: 94%;
            }


            .brand {
                padding: 25px 0 18px;
            }


            .brand h1 {
                font-size: 30px;
            }


            .product {
                flex-direction: column;

                padding: 25px;

                gap: 15px;

                text-align: center;
            }


            .product-image {
                width: 100%;
            }


            .product-content {
                width: 100%;
            }


            .product-image img {
                height: 280px;

                max-width: 300px;
            }


            .product-content h2 {
                font-size: 30px;
            }


            .tagline {
                font-size: 17px;
            }


            .benefit {
                text-align: left;

                justify-content: flex-start;
            }


            .section {
                padding: 25px 20px;
            }


            .section-title {
                font-size: 24px;
            }


            .cards {
                grid-template-columns: 1fr;
            }


            .benefit-grid {
                grid-template-columns: 1fr;
            }


            .ingredients {
                grid-template-columns: 1fr 1fr;
            }


            .steps {
                grid-template-columns: 1fr;
            }


            .highlights {
                grid-template-columns: 1fr 1fr;
            }


            .footer {
                padding: 40px 25px 20px;
            }


            .footer-container {
                grid-template-columns: 1fr 1fr;

                text-align: left;
            }

        }



        /* =====================================================
           SMALL MOBILE
        ===================================================== */

        @media (max-width: 450px) {

            .brand h1 {
                font-size: 27px;
            }


            .product {
                padding: 20px;
            }


            .product-image img {
                height: 230px;
            }


            .product-content h2 {
                font-size: 26px;
            }


            .product-description {
                font-size: 14px;
            }


            .benefit {
                font-size: 13px;
            }


            .section {
                padding: 22px 16px;
            }


            .ingredients {
                grid-template-columns: 1fr;
            }


            .highlights {
                grid-template-columns: 1fr;
            }


            .suitable-item {
                width: 100%;

                text-align: center;
            }


            .price-image img {
                max-width: 100%;
            }


            .footer {
                padding: 35px 20px 18px;

                border-radius: 15px 15px 0 0;
            }


            .footer-container {
                grid-template-columns: 1fr;

                text-align: center;

                gap: 28px;
            }


            .footer-logo p {
                margin: auto;
            }


            .social-links {
                justify-content: center;
            }


            .footer-column a:hover {
                padding-left: 0;
            }

        }

    </style>

</head>


<body>


<div class="container">


    <!-- =====================================================
         BRAND
    ===================================================== -->

    <div class="brand">

        <h1>ORBIT</h1>

        <p>Premium Hair Care</p>

    </div>



    <!-- =====================================================
         PRODUCT
    ===================================================== -->

    <div class="product">

        <div class="product-image">

            <img
                src="{{ asset('img/orbit.jpeg') }}"
                alt="ORBIT Hair Serum"
            >

        </div>


        <div class="product-content">

            <div class="small-title">
                PREMIUM HAIR CARE
            </div>


            <h2>
                ORBIT Hair Serum
            </h2>


            <div class="tagline">
                વાળની રોજિંદી સંભાળ માટે
            </div>


            <p class="product-description">

                ORBIT Hair Serum વાળની રોજિંદી સંભાળ માટે
                nourishing hair serum છે. તેની nourishing formula
                વાળને મજબૂત અને સ્વસ્થ દેખાવામાં મદદ કરે છે તથા
                વાળ તૂટવાથી થતો hair fall ઘટાડવામાં મદદ કરે છે.

            </p>


            <div class="benefits">

                <div class="benefit">
                    <span>✨</span>
                    <p>વાળને Smooth બનાવવામાં મદદ કરે</p>
                </div>


                <div class="benefit">
                    <span>✨</span>
                    <p>વાળને Shine આપે</p>
                </div>


                <div class="benefit">
                    <span>✨</span>
                    <p>Frizz ઘટાડવામાં મદદ કરે</p>
                </div>


                <div class="benefit">
                    <span>✨</span>
                    <p>Hair breakage ઘટાડવામાં મદદ કરે</p>
                </div>


                <div class="benefit">
                    <span>✨</span>
                    <p>વાળને Healthy & Manageable રાખવામાં મદદ કરે</p>
                </div>

            </div>

        </div>

    </div>



    <!-- =====================================================
         ABOUT
    ===================================================== -->

    <div class="section" id="about">

        <h2 class="section-title">
            About ORBIT Hair Serum
        </h2>


        <p class="section-subtitle">
            તમારા વાળની રોજિંદી સંભાળ માટે એક સરળ પસંદગી
        </p>


        <p class="about-text">

            ORBIT Hair Serum ખાસ કરીને વાળને smooth, shiny અને
            manageable દેખાવામાં મદદ કરવા માટે બનાવવામાં આવ્યું છે.
            રોજિંદા વાળની સંભાળમાં Serum નો ઉપયોગ કરવાથી વાળને
            વધુ સારી રીતે manage કરવામાં મદદ મળી શકે છે.

            <br><br>

            તેની lightweight feel વાળને ભારે કર્યા વગર
            વાળને neat અને polished look આપવામાં મદદ કરે.

        </p>

    </div>



    <!-- =====================================================
         WHY ORBIT
    ===================================================== -->

    <div class="section">

        <h2 class="section-title">
            Why Choose ORBIT?
        </h2>


        <p class="section-subtitle">
            રોજિંદા Hair Care માટે ઉપયોગી features
        </p>


        <div class="cards">


            <div class="card">

                <div class="card-icon">
                    ✨
                </div>

                <h3>
                    Smooth Hair
                </h3>

                <p>
                    વાળને smooth અને manageable દેખાવામાં મદદ કરે.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    💎
                </div>

                <h3>
                    Natural Shine
                </h3>

                <p>
                    વાળને healthy અને shiny appearance આપવામાં મદદ કરે.
                </p>

            </div>


            <div class="card">

                <div class="card-icon">
                    🌿
                </div>

                <h3>
                    Daily Care
                </h3>

                <p>
                    રોજિંદી hair care routine માટે સરળતાથી ઉપયોગ કરી શકાય.
                </p>

            </div>


        </div>

    </div>



    <!-- =====================================================
         HAIR BENEFITS
    ===================================================== -->

    <div class="section" id="benefits">

        <h2 class="section-title">
            Hair Care Benefits
        </h2>


        <p class="section-subtitle">
            ORBIT Hair Serum તમારા hair care routine માં કેવી રીતે મદદ કરી શકે
        </p>


        <div class="benefit-grid">


            <div class="benefit-box">

                <div class="icon">
                    ✨
                </div>

                <div>

                    <h3>
                        Smoothness
                    </h3>

                    <p>
                        Rough-looking hair ને smooth અને neat દેખાવામાં મદદ કરે.
                    </p>

                </div>

            </div>


            <div class="benefit-box">

                <div class="icon">
                    💫
                </div>

                <div>

                    <h3>
                        Shine
                    </h3>

                    <p>
                        વાળને natural-looking shine અને polished appearance
                        આપવામાં મદદ કરે.
                    </p>

                </div>

            </div>


            <div class="benefit-box">

                <div class="icon">
                    🌿
                </div>

                <div>

                    <h3>
                        Frizz Control
                    </h3>

                    <p>
                        Frizzy hair ને વધુ manageable બનાવવામાં મદદ કરે.
                    </p>

                </div>

            </div>


            <div class="benefit-box">

                <div class="icon">
                    💧
                </div>

                <div>

                    <h3>
                        Manageable Hair
                    </h3>

                    <p>
                        Hair styling અને daily hair management સરળ બનાવવામાં
                        મદદ કરે.
                    </p>

                </div>

            </div>


        </div>

    </div>



    <!-- =====================================================
         INGREDIENTS
    ===================================================== -->

    <div class="section" id="ingredients">

        <h2 class="section-title">
            Key Ingredients
        </h2>


        <p class="section-subtitle">
            Hair care માટે ઉપયોગમાં લેવાતા મુખ્ય ingredients
        </p>


        <div class="ingredients">


            <div class="ingredient">
                🌿 Argan Oil
            </div>


            <div class="ingredient">
                💧 Vitamin E
            </div>


            <div class="ingredient">
                ✨ Keratin
            </div>


            <div class="ingredient">
                🌱 Aloe Vera
            </div>


        </div>

    </div>



    <!-- =====================================================
         HOW TO USE
    ===================================================== -->

    <div class="section" id="how-to-use">

        <h2 class="section-title">
            How To Use
        </h2>


        <p class="section-subtitle">
            ORBIT Hair Serum વાપરવાની સરળ રીત
        </p>


        <div class="steps">


            <div class="step">

                <div class="step-number">
                    1
                </div>


                <h3>
                    Take Serum
                </h3>


                <p>
                    હાથમાં જરૂરી માત્રામાં Serum લો.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    2
                </div>


                <h3>
                    Apply
                </h3>


                <p>
                    ભીના અથવા સુકા વાળના મધ્ય ભાગથી છેડા સુધી લગાવો.
                </p>

            </div>


            <div class="step">

                <div class="step-number">
                    3
                </div>


                <h3>
                    Style
                </h3>


                <p>
                    Serum પછી વાળને તમારી રીતે style અને manage કરો.
                </p>

            </div>


        </div>

    </div>



    <!-- =====================================================
         SUITABLE FOR
    ===================================================== -->

    <div class="section">

        <h2 class="section-title">
            Suitable For
        </h2>


        <p class="section-subtitle">
            Daily hair care માટે
        </p>


        <div class="suitable">

            <div class="suitable-item">
                Dry Hair
            </div>


            <div class="suitable-item">
                Frizzy Hair
            </div>


            <div class="suitable-item">
                Rough Hair
            </div>


            <div class="suitable-item">
                Normal Hair
            </div>


            <div class="suitable-item">
                Daily Hair Care
            </div>

        </div>

    </div>



    <!-- =====================================================
         PRODUCT HIGHLIGHTS
    ===================================================== -->

    <div class="section">

        <h2 class="section-title">
            Product Highlights
        </h2>


        <p class="section-subtitle">
            ORBIT Hair Serum ની ખાસિયતો
        </p>


        <div class="highlights">


            <div class="highlight">

                <strong>
                    ✨ Smooth
                </strong>

                <span>
                    Smooth-looking hair
                </span>

            </div>


            <div class="highlight">

                <strong>
                    💎 Shine
                </strong>

                <span>
                    Healthy-looking shine
                </span>

            </div>


            <div class="highlight">

                <strong>
                    🌿 Frizz
                </strong>

                <span>
                    Helps reduce frizz
                </span>

            </div>


            <div class="highlight">

                <strong>
                    💧 Manageable
                </strong>

                <span>
                    Easy to manage
                </span>

            </div>


        </div>

    </div>



    <!-- =====================================================
         PRICE IMAGE
    ===================================================== -->

    <div class="price-image">

        <img
            src="{{ asset('img/price.jpeg') }}"
            alt="ORBIT Hair Serum Price"
        >

    </div>



    <!-- =====================================================
         ORDER FORM
    ===================================================== -->

    <div class="section">

        <h2 class="section-title">
            Order / Enquiry
        </h2>


        <p class="section-subtitle">
            Product વિશે વધુ માહિતી માટે તમારી details આપો
        </p>


        <div class="form-box">

            <form action="/insert" method="GET">


                <div class="form-group">

                    <label>
                        Name
                    </label>


                    <input
                        type="text"
                        name="name"
                        placeholder="Enter your name"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Contact
                    </label>


                    <!-- ONLY 10 DIGITS -->

                    <input
                        type="tel"
                        name="contact"
                        placeholder="Enter contact number"
                        maxlength="10"
                        minlength="10"
                        inputmode="numeric"
                        pattern="[0-9]{10}"
                        oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                        required
                    >

                </div>


                <div class="form-group">

                    <label>
                        Address
                    </label>


                    <textarea
                        name="address"
                        placeholder="Enter your address"
                        required
                    ></textarea>

                </div>


                <button
                    type="submit"
                    class="submit-btn"
                >
                    Submit Enquiry
                </button>


            </form>

        </div>

    </div>


</div>



<!-- =====================================================
     FOOTER
===================================================== -->

<footer class="footer">


    <div class="footer-container">


        <!-- FOOTER BRAND -->

        <div class="footer-logo">

            <h2>
                ORBIT
            </h2>


            <p>

                Premium Hair Care માટે ORBIT Hair Serum.
                તમારા વાળને Smooth, Shiny અને Manageable
                રાખવા માટે તમારી રોજિંદી hair care routine નો ભાગ.

            </p>


            <div class="social-links">


                <a href="#" title="Instagram">
                    📷
                </a>


                <a href="#" title="Facebook">
                    f
                </a>


                <a href="#" title="WhatsApp">
                    ☎
                </a>


            </div>

        </div>



        <!-- QUICK LINKS -->

        <div class="footer-column">

            <h3>
                Quick Links
            </h3>


            <a href="#about">
                About ORBIT
            </a>


            <a href="#benefits">
                Hair Benefits
            </a>


            <a href="#ingredients">
                Ingredients
            </a>


            <a href="#how-to-use">
                How To Use
            </a>

        </div>



        <!-- HAIR CARE -->

        <div class="footer-column">

            <h3>
                Hair Care
            </h3>


            <a href="#benefits">
                Smooth Hair
            </a>


            <a href="#benefits">
                Shine
            </a>


            <a href="#benefits">
                Frizz Control
            </a>


            <a href="#benefits">
                Daily Hair Care
            </a>

        </div>


    </div>



    <!-- FOOTER BOTTOM -->

    <div class="footer-bottom">

        © 2026 ORBIT Hair Serum. All Rights Reserved.

    </div>


</footer>


</body>

</html