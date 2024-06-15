@extends('front.layout.layout')
@section('content')
<!--====== App Content ======-->
<div class="app-content">

    <!--====== Section 1 ======-->
    <div class="u-s-p-y-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="breadcrumb">
                    <div class="breadcrumb__wrap">
                        <ul class="breadcrumb__list">
                            <li class="has-separator">

                                <a href="index.html">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="about.html">Terms and Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section 1 ======-->


    <!--====== Section 2 ======-->
    <div class="u-s-p-b-60">

        <!--====== Section Content ======-->
        <div class="section__content">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="t&c">
                            <div class="t&c__container">
                                <div class="t&c__info">
                                    <h2 class="t&c__h2" align="center">TERMS AND CONDITIONS</h2>
                                    <div class="t&c__p-wrap">
                                        <div>
                                        <p>
                                            1. Introduction<br>
                                            These Terms and Conditions ("Terms") govern your access and use of the [App Name] mobile application (the "App") developed and operated by [Your Company Name] ("we," "us," or "our"). By accessing or using the App, you agree to be bound by these Terms. If you do not agree to all the terms and conditions, you may not use the App.<br>
                                            2. User Accounts<br>
                                            You may be required to create an account ("Account") to access certain features of the App. You are responsible for maintaining the confidentiality of your account information, including your login credentials, and for all activity that occurs under your account. You agree to:<br>
                                            * Provide true, accurate, current, and complete information when creating your Account.<br>
                                            * Maintain the security of your Account by not sharing your login credentials with anyone.<br>
                                            * Notify us immediately of any unauthorized use of your Account or any other security breach.<br>
                                            3. Products and Services<br>
                                            The App allows you to browse and purchase a variety of products offered by us or third-party vendors. We reserve the right to modify, discontinue, or restrict access to any product or service at any time without prior notice.<br>
                                            4. Orders and Payment<br>
                                            When you place an order through the App, you agree to pay the total amount, including the price of the product, any applicable taxes, and shipping fees. We accept various payment methods as listed in the App. You represent and warrant that you have the legal right to use any payment method you select during checkout.<br>
                                            5. Shipping and Delivery<br>
                                            We will use commercially reasonable efforts to deliver your order within the estimated timeframe provided at checkout. However, we are not responsible for delays caused by factors beyond our control, such as carrier issues or inclement weather.<br>
                                            6. Returns and Refunds<br>
                                            Our return and refund policy is available on the App. You may be eligible for a return or refund depending on the product, condition, and timeframe.<br>
                                            7. User Content<br>
                                            You may submit reviews, ratings, or other content ("User Content") to the App. You retain all ownership rights to your User Content, but by submitting it, you grant us a non-exclusive, royalty-free license to use, reproduce, modify, publish, and distribute your User Content in connection with the App. You are responsible for the accuracy and completeness of your User Content and agree that it will not violate the rights of any third party.<br>
                                            8. Intellectual Property<br>
                                            The App and all its content, including logos, trademarks, and copyrights, are the property of [Your Company Name] or its licensors. You may not use any of this intellectual property without our express written permission.<br>
                                            9. Disclaimer<br>
                                            The App is provided "as is" and "as available" without warranties of any kind, express or implied. We disclaim all warranties, including but not limited to warranties of merchantability, fitness for a particular purpose, and non-infringement.<br>
                                            10. Limitation of Liability<br>
                                            We will not be liable for any damages arising out of your use of the App, including but not limited to direct, indirect, incidental, consequential, or punitive damages.<br>
                                            11. Termination<br>
                                            We may terminate your access to the App for any reason, at any time, without notice. You may also terminate your Account at any time.<br>
                                            12. Governing Law and Dispute Resolution<br>
                                            These Terms will be governed by and construed in accordance with the laws of [Your State/Country]. <br>Any dispute arising out of or relating to these Terms will be resolved through [Arbitration or Court litigation, specify which].<br>
                                            13. Entire Agreement<br>
                                            These Terms constitute the entire agreement between you and us regarding your use of the App.<br>
                                            14. Changes to Terms
                                            We may update these Terms at any time by posting the revised version on the App. You are responsible for checking the Terms periodically. Your continued use of the App following the posting of revised Terms constitutes your acceptance of the revisions.<br>
                                            15. Contact Us
                                            If you have any questions about these Terms, please contact us at [Your Email Address].<br>
                                        <p class="t&c__p"></p>
                                    </div>
                                </div>

                            </div>
                            @if ($term)
                            <div class="">
                                <h2 class="about__h2">Terms and Conditions for {{ $term->company_name }}!</h2>
                                <div class="about__p-wrap">
                                    <p class="" style="text-align: left; line-height:1.6rem; margin:20px 10px;">{!! $term->terms_and_conditions !!}</p>
                                </div>

                                <a class="about__link btn--e-secondary" href="/" target="_blank">Shop Now</a>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--====== End - Section Content ======-->
</div>
<!--====== End - Section 2 ======-->

</div>
<!--====== End - App Content ======-->
@endsection