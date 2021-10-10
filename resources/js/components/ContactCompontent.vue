<template>
    <div class="sction-contact">
        <div class="container">
            <div class="row pt-0 pt-lg-5 pb-5">
                <!-- Contact Content -->
                <div class="col-lg-6 contact_col">
                    <div class="contact_content">
                        <div class="contact_content_title">
                            Get in touch with us
                        </div>
                        <div class="contact_content_text">
                            <p>
                                Lorem ipsum dolor sit amet consectetur
                                adipisicing elit. Consectetur minus vel porro
                                blanditiis id alias iure nam incidunt temporibus
                                modi? Odit corporis mollitia quod magnam enim
                                expedita at libero laudantium? Lorem ipsum dolor
                                sit amet consectetur adipisicing elit.
                                Perspiciatis, cum ab praesentium aperiam
                                inventore minus nisi ratione tempore animi
                                accusamus ad distinctio obcaecati ullam amet,
                                incidunt itaque, a repellendus ipsa!
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-6 mt-5 mt-lg-0">
                    <div class="contact_form_container p-4">
                        <h2 class="contact_form_title mb-5">Contact Us</h2>
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="row">
                                <div class="col-12 col-lg-6">
                                    <input type="text" class="contact_input" placeholder="Your Name" required="required" />
                                </div>

                                <div class="col-12 col-lg-6">
                                    <input type="tel" class="contact_input" placeholder="Your Phone" required="required" />
                                </div>
                                <div class="col-12">
                                    <input type="email" class="contact_input" style="width: 100%;" placeholder="Your E-mail" required="required" />
                                </div>
                                <div class="col-12">
                                    <textarea class="contact_input" style="width: 100%; min-height:100px" placeholder="Enter Your Message" required="required"></textarea>
                                </div>
                                <div class="col-12">
                                    <button class="button button_1 contact_button trans_200">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>
<style scoped>


.sction-contact
{
	font-family: 'Montserrat', sans-serif;
	font-size: 14px;
	font-weight: 400;
	background: #0f243c !important;
	color: #a5a5a5;
    position: relative;
    /* padding: 70px 0; */
}
/*div
{
	display: block;
	position: relative;
	-webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
}*/



.button
{
	height: 46px;
	border-radius: 20px;
}
.button a
{
	display: block;
	padding-left: 40px;
	padding-right: 36px;
	line-height: 42px;
	font-size: 14px;
	text-transform: uppercase;
	font-weight: 600;
}
.button_1
{
	/*background: #00ccff;*/
    background: #fd1266;
	border: solid 2px transparent;
}
.button_1 a
{
	color: #FFFFFF;
}
.button_1:hover
{
	background: transparent;
	border: solid 2px #00ccff;
}
.button_1:hover a
{
	color: #00ccff;
}



.contact
{
	background: #FFFFFF;
	padding-top: 51px;
	padding-bottom: 90px;
}
.contact_form_container
{
	width: 100%;
	background: transparent;
	/* padding-left: 33px; */
	/* padding-right: 34px; */
	/* padding-bottom: 63px;
	padding-top: 136px; */
	/*box-shadow: 0px 2px 12px #fd1266;*/
    box-shadow: 0px 2px 12px #059cc2;
    position: relative;
    border-radius: 50px;
}
.contact_form_title
{

	/* position: absolute; */
	/* top: 0;
	left: 0; */
    width: 100%;
	/* line-height: 80px; */
	text-align: center;
	font-size: 40px;
	font-weight: 600;
    /*color: #06356b;*/
    color: #ffe0e0;
}
.contact_form
{
	width: 100%;
}
.contact_input
{
	width: 100%;
	height: 62px;
	background: transparent;
	border: solid 2px #e6ebf1;
	margin-bottom: 18px;
	padding-left: 25px;
	outline: none;
	font-size: 15px;
	color: #fff;
	font-weight: 500;
	-webkit-transition: all 200ms ease;
	-moz-transition: all 200ms ease;
	-ms-transition: all 200ms ease;
	-o-transition: all 200ms ease;
	transition: all 200ms ease;
}

.contact_input:focus,
.contact_input:hover
{
	border: solid 2px #ec598d;
}
.contact_input::-webkit-input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #a09f9f !important;
}
.contact_input:-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #a09f9f !important;
}
.contact_input::-moz-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #a09f9f !important;
}
.contact_input:-ms-input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #a09f9f !important;
}
.contact_input::input-placeholder
{
	font-size: 14px !important;
	font-weight: 400 !important;
	font-style: italic;
	color: #a09f9f !important;
}
.contact_button
{
	width: 100%;
	font-size: 14px;
	font-weight: 700;
	color: #FFFFFF;
	text-transform: uppercase;
	border: solid 2px transparent;
	cursor: pointer;
	margin-top: 24px;
}
.contact_button:hover
{
	background: transparent;
	border: solid 2px #fd1266;
	color: #fd1266;
}
.contact_content_title
{
	font-size: 30px;
	font-weight: 600;
	/*color: #fd1266;*/
    color: #00ccff;
	line-height: 1.2;
	margin-top: 32px;
}
.contact_content_text
{
    margin-top: 21px;
    color: #ffe0e0;
}
    .contact_content_text p{
        color: #ffe0e0;
    }

textarea::placeholder{
   padding-top: 20px !important;
}
</style>>

