<style>
     .counter {
         position: relative;
         display: flex;
         align-items: center;
     }
     
     .counter.-light .counter__back {
         -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2);
     }
     
     .counter__back {
         font-size: 120px;
         line-height: 141px;
         padding-right: 80px;
         color: transparent;
         -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
     }
     
     .counter__content {
         display: flex;
         align-items: center;
         position: absolute;
         left: 30%;
     }
     
     .counter__number {
    font-size: 50px;
    font-weight: 600;
    line-height: 59px;
    color: #1d1e36 !important;
}
     
     .counter__title {
         font-size: 14px;
         font-weight: 400;
         line-height: 20px;
         text-transform: uppercase;
         margin-left: 9px;
     }
     
     .counter.-portfolio-single {
         flex-direction: column;
         padding-top: 1.75rem;
     }
     
     .counter.-portfolio-single .counter__number {
         font-size: 50px;
         font-weight: 600;
         line-height: 1;
     }
     
     .counter.-portfolio-single .counter__content {
         position: relative;
         left: unset;
         flex-direction: column;
     }
     
     .counter.-portfolio-single .counter__back {
         padding: 0;
         position: absolute;
         top: 2px;
         font-size: 80px;
         line-height: 1;
         -webkit-text-stroke: 1px rgba(0, 0, 0, 0.2);
     }
     
     .counter.-portfolio-single.-light .counter__back {
         -webkit-text-stroke: 1px rgba(255, 255, 255, 0.2);
     }
     
 </style>
<section class="layout-pt-md layout-pb-md bg-grey pattern_bg_1">
          <div class="container">
            <div class="row justify-content-between md:pt-48">

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                 900
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black count">900 </div>
                    <h5 class="counter__title text-black">Labours</h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                  250
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black count">250</div>
                    <h5 class="counter__title text-black">Total <br>Guards</h5>
                  </div>
                </div>
              </div>

              <div class="col-lg-auto col-md-6">
                <div class="counter">
                  <div class="counter__back">
                   100
                  </div>

                  <div class="counter__content">
                    <div class="counter__number text-black count">100</div>
                    <h5 class="counter__title text-black">Happy <br>Clients</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>