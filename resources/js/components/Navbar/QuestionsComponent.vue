<template>
    <div class="newsbg">
        <!-------------------------------News Section Begin---------------------------->
        <section class="news">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <article class="newsdetails">
                            <!--Block item -->
                            <div class="newsblk">
                                <figure>
                                    <img
                                        class="mainnews w-100"
                                        :src="'FrontEnd/images/Details/Bg-02.PNG'"
                                    />
                                </figure>
                                <a href="#">
                                    <h4>Lorem ipsum dolor sit amet.</h4>
                                </a>
                                <p>
                                    Lorem ipsum dolor, sit amet consectetur
                                    adipisicing elit. Debitis iste aperiam
                                    cupiditate mollitia eos nisi harum....
                                </p>
                                <button>Read More</button>
                            </div>
                        </article>
                    </div>
                    <!--Block item-->
                    <div class="col-lg-6">
                        <article class="sidnews p-2">
                            <div class="row">
                                <!--side news image -->
                                <div class="col-lg-4 col-md-6">
                                    <img
                                        class="img-fluid image"
                                        :src="'FrontEnd/images/Dolls/01.PNG'"
                                    />
                                </div>
                                <!--side news title-->
                                <div class="col-lg-8 col-md-6 text-left">
                                    <a href="#">
                                        <h4>Lorem ipsum dolor sit amet.</h4>
                                    </a>
                                    <p>
                                        Lorem ipsum dolor sit, amet consectetur
                                        adipisicing elit. Quam cumque illum
                                        reiciendis ipsum minus corporis rerum
                                        nemo neque aspernatur....
                                    </p>
                                    <button>Read More</button>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>
        <!--News Section End-->
        <!---------------------------------Begin The lastest News section-------------------------------------->

        <!-- START MAIN NEWS -->
        <section class="news-section">
            <div class="container">
                <div class="news-details">
                    <div class="row">
                        <div class="col-lg-6 main">
                            <article class="latest-news">
                                <h4 class="mainnewsh border">Main News</h4>
                                <div class="row">
                                    <div class="image-wrapper col-lg-6">
                                        <a href="#">
                                            <img
                                                class="img-fluid nimage"
                                                :src="'FrontEnd/images/Details/Bg-02.PNG'"
                                                alt="main-news-highlight"
                                            />
                                        </a>
                                    </div>
                                    <!--MAIN NEWS TITLE-->
                                    <div class="news-header col-lg-6">
                                        <h3>
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit
                                        </h3>
                                        <i
                                            class=" calendar far fa-calendar-alt"
                                        ></i>
                                        <time
                                            class="time"
                                            datetime="2021-7-13 17:00"
                                            >13th june 2021</time
                                        >
                                        <p class="newt">
                                            Lorem ipsum dolor sit amet
                                            consectetur, adipisicing elit. Dicta
                                            Repellendus eligendi ab quia.
                                        </p>
                                    </div>
                                </div>
                                <!--SUBNEWS BLOCKS-->
                            </article>
                            <!-- Start MINI NEWS-->

                            <!--MINI NEWS-->
                            <article class="latest-news">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="row">
                                              <div class="col-lg-6">
                                                <a href="#"
                                                    ><img
                                                        class="img-fluid hover miniimages"
                                                        :src="'FrontEnd/images/Details/Bg-02.PNG'"
                                                /></a>
                                            </div>
                                            <div class="col-lg-6">
                                                <a href="#">
                                                    <h5>
                                                        Lorem ipsum, dolor sit amet.
                                                    </h5>
                                                </a>
                                                <i
                                                    class=" calendar far fa-calendar-alt"
                                                ></i>
                                                <time
                                                    class="time"
                                                    datetime="2021-7-13 17:00"
                                                    >13th june 2021</time
                                                >
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </article>
                        </div>
                        <div class="col-lg-6">
                            <!--Subnews Block-->
                            <article class="subnews">
                                <div class="row">
                                    <div class="image-wrapper col-lg-3">
                                        <a href="#">
                                            <img
                                                class="img-fluid"
                                                :src="'FrontEnd/images/Dolls/01.PNG'"
                                                alt="sub-news-highlight"
                                            />
                                        </a>
                                    </div>
                                    <div class="subnh col-lg-9">
                                        <a href="#">
                                            <h5 class=" mb-2">
                                                Lorem ipsum dolor sit amet
                                            </h5>
                                        </a>
                                        <i
                                            class="calendar far fa-calendar-alt"
                                        ></i>
                                        <time
                                            class="time"
                                            datetime="2021-7-13 17:00"
                                            >13th june 2021</time
                                        >
                                        <p class="subt">
                                            Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Vel
                                            illum fugit odit, aperiam, voluptas
                                            nemo error nobis possimus
                                        </p>
                                    </div>
                                </div>
                            </article>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</template>

<style scoped>
a {
    text-decoration: none;
}
.news-section {
  background-color: #1b252c;
}

.newsbg {
  background-color: #1b252c;
}

.news {
  background: #1b252c;
  padding: 10px;
}

.newsdetails .newsblk {
  border: 1px solid rgba(255, 219, 179, 0.1);
  /* margin-top: 20px; */
  margin-left: 0px;
  border-radius: 5px;
  background-color: rgba(255, 219, 179, 0.1);
  position: relative;
  text-align: center;
}
.newsdetails .details h3 {
  color: #00ccff;
  margin-top: 12px;
}
.newsdetails .details h3:hover {
  color: #fecc2f;
}
.newsdetails h4 {
  color: #ffe0e0;
  font-weight: bold;
  margin-bottom: 15px;
  margin-top: 5px;
}
.newsdetails h4:hover {
  color: #fecc2f;
  font-weight: bold;
}
.newsdetails p {
  overflow-wrap: break-word;
  color: #f5f3e7;
}
.newsdetails button {
  border: 1px solid #fd1266;
  padding: 13px;
  margin-bottom: 15px;
  padding-left: 30px;
  padding-right: 30px;
  color: #fd1266;
  background-color: transparent;
  border-radius: 5px;
  transition: all ease-in 0.2s;
}
.newsdetails button:hover {
  color: #f5f3e7;
}
.newsdetails button:focus {
  background: #ffe0e0;
  color: #fd1266;
  padding-left: 28px;
  padding-right: 28px;
  padding: 12px;
}

.sidnews {
  border: 1px solid rgba(255, 219, 179, 0.1);
  background-color: rgba(255, 219, 179, 0.1);
  text-align: center;
  margin-bottom: 7px;
  padding: 0px;
  /* margin-top: 20px; */
  border-radius: 5px;
  /*.image{
    min-height: 197px;
    max-height: 100%;
  }*/
}
.sidnews h4 {
  margin-bottom: 5px;
  /* margin-top: 15px; */
  color: #ffe0e0;
}
.sidnews h4:hover {
  color: #fecc2f;
}
.sidnews p {
  color: #f5f3e7;
}
.sidnews button {
  border: 1px solid #fd1266;
  padding: 10px;
  margin-bottom: 15px;
  padding-left: 30px;
  padding-right: 30px;
  color: #fd1266;
  background-color: transparent;
  border-radius: 5px;
  transition: all ease-in 0.2s;
}
.sidnews button:hover {
  color: #f5f3e7;
}
.sidnews button:focus {
  background: #ffe0e0;
  color: #fd1266;
  padding-left: 28px;
  padding-right: 28px;
  padding: 12px;
}

.news-details {
  background: #1b252c;
  /* padding: 20px; */
}

.mainnewsh {
  background-color: rgba(0, 204, 255, 0.8);
  color: #383754;
  margin-bottom: 30px;
  /* margin-top: 20px; */
  padding: 5px;
}

.latest-news {
  background: rgba(255, 219, 179, 0.1);
  border-radius: 3px;
  padding: 10px
}
.latest-news h5, .latest-news h3 {
  cursor: pointer;
  color: #ffe0e0;
}
.latest-news h5:hover, .latest-news h3:hover {
  color: #fecc2f;
}
/* .latest-news .miniimages {
  margin-left: 7px;
  margin-bottom: 38px;
  margin-top: 3px;
} */

/* .nimage {
  height: 223px;
} */

.subnews {
  background: rgba(255, 219, 179, 0.1);
  border-radius: 2px;
  padding: 10px;
}
.subnews .img-fluid {
  margin-left: 5px;
}

.subnh h5, .subnh h3 {
  cursor: pointer;
  color: #ffe0e0;
}
.subnh h5:hover, .subnh h3:hover {
  color: #fecc2f;
}
.subnh .subt {
  color: #ffe0e0;
}

.time {
  color: #fd1266;
  font-size: 12px;
  font-weight: bold;
}

.calendar {
  font-size: 13px;
  font-weight: bold;
  color: #fd1266;
}

.newt {
  color: #ffe0e0;
}

/*# sourceMappingURL=app.css.map */

</style>
