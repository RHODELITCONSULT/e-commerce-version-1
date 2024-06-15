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

                                <a href="/">Home</a>
                            </li>
                            <li class="is-marked">

                                <a href="privacy_policy">Privacy Policy</a>
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
                        <div class="p&p">
                            <div class="p&p__info">
                                <h4 class="p&p__h2" align="center">Privacy Policy</h2>
                                <div class="p&p__p-wrap">
                                    <div>
                                    <p>
                                        1. Introduction<br>

                                        This Privacy Policy describes how [Your Company Name] ("we," "us," or "our") collects, uses, and shares your personal information when you visit our website ([Your Website URL]) or use our mobile application (the "App") (collectively, the "Services").<br>

                                        2. Information We Collect<br>

                                        We collect several types of information from and about users of our Services:<br>

                                        Information you provide: This includes information you provide when you create an account, place an order, subscribe to our newsletter, or contact us. This may include your name, email address, billing and shipping address, phone number, and payment information.<br>
                                        Information collected automatically: When you use our Services, we automatically collect certain information about your device, including your IP address, web browser type, operating system, time zone, and some of the cookies that are installed on your device. We may also collect information about your browsing behavior on our Services, such as the pages you visit and products you view.<br>
                                        Information from third parties: We may collect information about you from third-party sources, such as social media platforms or marketing partners. This information may include your name, email address, demographic data, and interests.<br>
                                        3. Use of Your Information<br>

                                        We use the information we collect for various purposes, including:<br>

                                        To process your orders and fulfill your requests.<br>
                                        To send you marketing communications, such as newsletters and promotional offers.<br>
                                        To personalize your experience on our Services.<br>
                                        To improve our Services and develop new features.<br>
                                        To prevent fraud and maintain the security of our Services.<br>
                                        To comply with legal and regulatory requirements.<br>
                                        4. Sharing Your Information<br>

                                        We may share your information with third-party service providers who help us operate our business, such as payment processors, shipping companies, marketing agencies, and data analytics providers. We will only share your information with these third parties in accordance with this Privacy Policy and their own privacy policies.<br>

                                        We may also share your information if we are required to do so by law or in the good faith belief that such action is necessary to protect our rights, property, or safety, or the rights, property, or safety of others.<br>

                                        5. Cookies and Other Tracking Technologies<br>

                                        We use cookies and other tracking technologies to collect and store information about your use of our Services. Cookies are small data files that are stored on your device when you visit a website. They allow us to track and target your interests, analyze trends, and improve our Services.<br>

                                        You can control your cookie preferences through your web browser settings. However, if you disable cookies, you may not be able to use all of the features of our Services.<br>

                                        6. Your Privacy Rights<br>

                                        You have certain rights regarding your personal information, including:<br>

                                        The right to access your personal information.<br>
                                        The right to rectify inaccurate personal information.<br>
                                        The right to request the deletion of your personal information.<br>
                                        The right to object to the processing of your personal information.<br>
                                        The right to withdraw your consent to the processing of your personal information (where applicable).<br>
                                        You can exercise these rights by contacting us at [Your Email Address].<br>

                                        7. Children's Privacy<br>

                                        Our Services are not directed to children under the age of [Age Limit, e.g., 13]. We do not knowingly collect personal information from children. If you are a parent or guardian and you believe your child has provided us with personal information, please contact us. If we learn that we have collected personal information from a child under [Age Limit], we will delete that information from our records.<br>

                                        8. Security<br>

                                        We take reasonable steps to protect your personal information from unauthorized access, disclosure, alteration, or destruction. However, no internet transmission or electronic storage method is 100% secure. Therefore, we cannot guarantee the absolute security of your information.<br>

                                        9. Changes to this Privacy Policy<br>

                                        We may update this Privacy Policy from time to time to reflect changes in our practices or comply with legal requirements. We will notify you of any changes by posting the revised Privacy Policy on our Services.<br>

                                        10. Contact Us<br>

                                        If you have any questions about this Privacy Policy, please contact us at [Your Email Address].<br>
                                        If you have any questions about these Terms, please contact us at [Your Email Address].<br>
                                    <p class="t&c__p"></p>
                                </div>
                            </div>

                            @if ($privacy)
                            <div class="aboout__inf">
                                <h2 class="about__h2">Welcome to {{ $privacy->company_name }}!</h2>
                                <div class="about__p-wrap">
                                    <p class="">{!! $privacy->privacy_policy !!}</p>
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