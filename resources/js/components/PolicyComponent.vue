<template>
  <div>
    <main>
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-xs-12">
            <div class="who-we-are no-border-bottom no-margin-bottom">
              <h3>{{ policy.title }}</h3>
              <article v-html="policy.body"></article>
            </div>
            <!--who-we-are-->
            <div class="image">
              <img src="img/about-banner.jpg" alt="" />
            </div>
            <!--image-->

            <div class="border"></div>
            <!--border-->
            <!--team-section-->
            <!-- End First team -->
          </div>
          <!--col-->
        </div>
        <!--row-->
      </div>
      <!--container-->
    </main>
  </div>
</template>
<style scoped>
  main {
    background: #0f243c;
    padding-top: 40px;
  }
  .title-inner {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
  }
  .title-inner h2 {
    color: #fd1266;
    font-weight: bold;
    background: #dedede;
    border-bottom-right-radius: 25px;
    border-bottom-left-radius: 25px;
    padding: 25px;
    text-transform: uppercase;
  }
  .services-banner {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
    margin-bottom: 20px;
  }
  .services-banner img {
    max-width: 100%;
    display: block;
    margin: 0 auto;
    border-radius: 5px;
  }
  .who-we-are {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
    padding-bottom: 20px;
    border-bottom: 2px solid #fd1266;
    margin-bottom: 30px;
  }
  .who-we-are h3 {
    color: #fd1266;
    margin-bottom: 10px;
    font-weight: 600;
    text-transform: capitalize;
  }
  .who-we-are article {
    color: #ffe0e0;
    font-size: 14px;
    line-height: 2;
  }
  .font-bold span {
    font-weight: bold;
  }
  .no-border-bottom {
    border-bottom: 0;
  }
  .no-margin-bottom {
    margin-bottom: 0;
  }
  .border {
    width: 100%;
    display: block;
    background: #fd1266;
    height: 3px;
    margin-bottom: 30px;
    margin-top: 30px;
  }

  .team-section {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
  }
  .team-section .row {
    border-bottom: 2px solid #fd1266;
    padding-top: 30px;
    padding-bottom: 30px;
  }
  .team-section .row:last-child {
    border-bottom: 0;
  }
  .member-image {
    height: auto;
    width: 100%;
    display: block;
    padding: 5px;
  }
  .member-image img {
    display: block;
    max-width: 100%;
    border-radius: 5px;
    margin: 0 auto;
    box-shadow: 0 0 5px 2px #b0b0b0;
    margin-bottom: 20px;
  }
  .about-member {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
  }
  .about-member h4 a {
    color: #fd1266;
    font-weight: bold;
    text-decoration: none;
    -webkit-transition: 0.3s ease-in-out;
    -moz-transition: 0.3s ease-in-out;
    -ms-transition: 0.3s ease-in-out;
    -o-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
  }
  .about-member h4 a:hover {
    color: #fff !important;
    text-decoration: none !important;
    -webkit-transition: 0.3s ease-in-out;
    -moz-transition: 0.3s ease-in-out;
    -ms-transition: 0.3s ease-in-out;
    -o-transition: 0.3s ease-in-out;
    transition: 0.3s ease-in-out;
  }
  .about-member h4 a:focus {
    color: #fff !important;
    text-decoration: none !important;
  }
  .about-member article {
    color: #ffe0e0;
    font-size: 14px;
    line-height: 2;
    margin-top: 5px;
  }
  .mark-text {
    overflow: hidden;
    height: auto;
    width: 100%;
    display: block;
    padding-left: 22px;
    margin-top: 10px;
  }
  .mark-text article {
    color: #00ccff !important;
    font-weight: 600;
  }

  .title {
    color: #ac1f2d;
    font-weight: bold;
    text-transform: uppercase;
    text-align: center;
    margin-bottom: 10px;
  }
  article.text {
    color: #00ccff;
    font-style: italic;
    font-size: 16px;
    text-align: center;
  }

  /************** last update **************************/

  .team-section .member-image img {
    height: 150px !important;
  }

  .about-member .mark-text article {
    color: #00ccff !important;
  }
</style>


<script>

export default({
  data() {
      return{
        policy: {}
      }
  },
  mounted(){
    axios.get('/api/cms/getSingleCms/policy').then((response) => {
      this.policy = response.data;
    });
  }
})
</script>
