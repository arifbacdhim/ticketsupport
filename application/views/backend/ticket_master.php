<style>
  .gradient-text {
    /* Fallback: Set a background color. */
    background-color: red;
    /* Create the gradient. */
    background-image: linear-gradient(to right, #360033, #0b8793);
    /* Set the background size and repeat properties. */
    background-size: 73%;
    background-repeat: repeat;
    /* Use the text as a mask for the background. */
    /* This will show the gradient as a text color rather than element bg. */
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent; 
    -moz-background-clip: text;
    -moz-text-fill-color: transparent;
  }

  h1 {
    font-family: "Archivo Black", sans-serif;
    font-weight: normal;
    font-size: 2em;
    text-align: center;
    margin-bottom: 0;
    margin-bottom: -0.25em;
  }
</style>  
<!-- Page -->
<div class="page">
  <div class="page-header">
    <ol class="breadcrumb">
      <a href="<?php echo base_url('backend/admdashboard'); ?>" class="btn btn-round btn-info"><i class="icon md-home" aria-hidden="true"></i>Dashboard</a>
    </ol>
  </div>
  <div class="page-content container-fluid">
        <header>
          <h1 class="gradient-text"><b>APPLICATION</b></h1><br>
        </header>
        <div class="row" data-plugin="matchHeight" data-by-row="true">
          <div class="col-xl-4 col-md-6">
            <!-- Widget Linearea One-->
            <a href="<?php echo base_url('backend/tooling') ?>">
              <div style="height: 70%;" class="card card-shadow" id="widgetLineareaOne">
                <div class="card-block pt-10">
                  <div class="clearfix">
                    <div class="grey-800" style="text-align: center;">
                      <h4><b>Tooling System</b></h4>
                    </div>
                    <!-- <span class="float-right grey-700 font-size-30">1,253</span> -->
                  </div>
                  <!-- <div class="ct-chart h-50"></div> -->
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 20 80" style="enable-background:new 0 0 70 70; text-align: center;" xml:space="preserve" width="300px" height="130px">
                  <g>
                  <path
                  d="M61,37a1,1,0,0,0,1-1V28a1,1,0,0,0-1-1H55.467a23.856,23.856,0,0,0-3.337-8.057l3.908-3.917a1,1,0,0,0,0-1.413l-5.65-5.65a1,1,0,0,0-1.413,0L45.057,11.87A23.856,23.856,0,0,0,37,8.533V3a1,1,0,0,0-1-1H28a1,1,0,0,0-1,1V8.533a23.856,23.856,0,0,0-8.057,3.337L15.026,7.962a1,1,0,0,0-1.413,0l-5.65,5.65a1,1,0,0,0,0,1.413l3.908,3.917A23.856,23.856,0,0,0,8.533,27H3a1,1,0,0,0-1,1v8a1,1,0,0,0,1,1H8.533a23.856,23.856,0,0,0,3.337,8.057L7.962,48.974a1,1,0,0,0,0,1.413l5.65,5.65a1,1,0,0,0,1.413,0l3.917-3.908A23.856,23.856,0,0,0,27,55.467V61a1,1,0,0,0,1,1h8a1,1,0,0,0,1-1V55.467a23.88,23.88,0,0,0,8.054-3.342l8.159,8.159a5,5,0,0,0,7.071-7.071l-8.159-8.159A23.88,23.88,0,0,0,55.467,37ZM58.87,58.87a3,3,0,0,1-4.243,0L35.479,39.723a4.979,4.979,0,0,0-3.542-1.456,5.249,5.249,0,0,0-.624.037A7.993,7.993,0,0,1,22.639,28.3l4.411,4.412a1,1,0,0,0,.707.293H32a1,1,0,0,0,1-1V27.757a1,1,0,0,0-.293-.707L28.3,22.639A7.993,7.993,0,0,1,38.3,31.313a5.006,5.006,0,0,0,1.419,4.166L58.87,54.627A3,3,0,0,1,58.87,58.87Zm-17.733-24.8a3.015,3.015,0,0,1-.846-2.515A9.993,9.993,0,0,0,26.056,21.345a1,1,0,0,0-.274,1.609L31,28.171V31H28.171l-5.217-5.218a1,1,0,0,0-1.609.274A9.992,9.992,0,0,0,31.55,40.29a3.016,3.016,0,0,1,2.515.847l5.144,5.143a16.01,16.01,0,1,1,7.071-7.071Zm12.518,1.766a21.8,21.8,0,0,1-2.974,7.779l-2.924-2.924a18.021,18.021,0,1,0-7.071,7.071l2.924,2.924a21.8,21.8,0,0,1-7.779,2.974A1,1,0,0,0,35,54.64V60H29V54.64a1,1,0,0,0-.831-.985A21.789,21.789,0,0,1,19.4,50.021a1,1,0,0,0-1.282.111l-3.792,3.785-4.238-4.238,3.785-3.792a1,1,0,0,0,.111-1.282,21.789,21.789,0,0,1-3.634-8.774A1,1,0,0,0,9.36,35H4V29H9.36a1,1,0,0,0,.985-.831A21.789,21.789,0,0,1,13.979,19.4a1,1,0,0,0-.111-1.282l-3.785-3.792,4.238-4.238,3.792,3.785a1,1,0,0,0,1.282.111,21.789,21.789,0,0,1,8.774-3.634A1,1,0,0,0,29,9.36V4h6V9.36a1,1,0,0,0,.831.985,21.789,21.789,0,0,1,8.774,3.634,1,1,0,0,0,1.282-.111l3.792-3.785,4.238,4.238-3.785,3.792a1,1,0,0,0-.111,1.282,21.789,21.789,0,0,1,3.634,8.774A1,1,0,0,0,54.64,29H60v6H54.64A1,1,0,0,0,53.655,35.831Z" />
                <path d="M38.364,36.95a1,1,0,1,0-1.414,1.414l.707.707a1,1,0,0,0,1.414-1.414Z" />
                <path d="M52.506,53.92a1,1,0,0,0,1.414-1.414L41.9,40.485A1,1,0,0,0,40.485,41.9Z" />
                <path d="M56.042,57.456a1,1,0,0,0,1.414-1.414l-.707-.708a1,1,0,1,0-1.415,1.415Z" />
                  </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                  </svg>
                </div>
              </div>
            </a>
            <!-- End Widget Linearea One -->
          </div>
          <div class="col-xl-4 col-md-6">
            <!-- Widget Linearea Two -->
            <a href="<?php echo base_url('backend/machine') ?>">
            <div style="height: 70%;" class="card card-shadow" id="widgetLineareaTwo">
              <div class="card-block pt-10">
                <div class="clearfix">
                <div class="grey-800" style="text-align: center;">
                  <h4><b>Machine System</b></h4>
                </div>
                  <!-- <span class="float-right grey-700 font-size-30">2,425</span> -->
                </div>
                <!-- <div class="ct-chart h-50"></div> -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 510 890.667" style="enable-background:new 0 0 749.667 749.667;" xml:space="preserve" width="350px" height="150px">
                <g>
                <path
                  d="m10 248.832031h55.476562c3.28125 11.832031 8.007813 23.214844 14.085938 33.882813l-39.265625 39.25c-1.875 1.875-2.929687 4.417968-2.929687 7.074218s1.054687 5.199219 2.929687 7.074219l42.421875 42.433594c3.90625 3.898437 10.234375 3.898437 14.140625 0l39.269531-39.273437c10.667969 6.074218 22.039063 10.804687 33.871094 14.082031v55.476562c0 5.523438 4.476562 10 10 10h60c5.523438 0 10-4.476562 10-10v-55.476562c11.832031-3.277344 23.203125-8.007813 33.871094-14.082031l39.269531 39.273437c3.96875 3.75 10.175781 3.75 14.140625 0l42.429688-42.433594c1.875-1.875 2.929687-4.417969 2.929687-7.074219s-1.054687-5.199218-2.929687-7.074218l-39.273438-39.25c6.078125-10.667969 10.804688-22.050782 14.085938-33.882813h55.476562c5.523438 0 10-4.476562 10-10v-60c0-5.519531-4.476562-10-10-10h-55.476562c-3.28125-11.828125-8.007813-23.210937-14.085938-33.878906l39.265625-39.25c1.875-1.875 2.929687-4.417969 2.929687-7.074219s-1.054687-5.199218-2.929687-7.074218l-42.421875-42.433594c-3.90625-3.902344-10.234375-3.902344-14.140625 0l-39.269531 39.273437c-10.667969-6.070312-22.042969-10.800781-33.871094-14.082031v-55.480469c0-5.519531-4.476562-10-10-10h-60c-5.523438 0-10 4.480469-10 10v55.480469c-11.828125 3.28125-23.203125 8.011719-33.871094 14.082031l-39.269531-39.273437c-3.96875-3.75-10.175781-3.75-14.140625 0l-42.429688 42.433594c-1.875 1.875-2.929687 4.417968-2.929687 7.074218s1.054687 5.199219 2.929687 7.074219l39.273438 39.25c-6.078125 10.667969-10.804688 22.050781-14.085938 33.878906h-55.476562c-5.523438 0-10 4.480469-10 10v60c0 5.523438 4.476562 10 10 10zm10-60h53.300781c4.699219 0 8.765625-3.269531 9.769531-7.859375 3.28125-14.976562 9.214844-29.25 17.519532-42.140625 2.535156-3.953125 1.972656-9.144531-1.351563-12.46875l-37.738281-37.738281 28.289062-28.292969 37.730469 37.738281c3.324219 3.332032 8.519531 3.894532 12.480469 1.355469 12.894531-8.300781 27.164062-14.234375 42.140625-17.519531 4.585937-1.007812 7.859375-5.074219 7.859375-9.773438v-53.300781h40v53.300781c0 4.699219 3.273438 8.765626 7.859375 9.773438 14.976563 3.285156 29.246094 9.21875 42.140625 17.519531 3.960938 2.539063 9.15625 1.976563 12.480469-1.355469l37.730469-37.738281 28.28125 28.292969-37.730469 37.726562c-3.332031 3.328126-3.890625 8.523438-1.351563 12.480469 8.304688 12.898438 14.230469 27.167969 17.507813 42.148438 1.007812 4.589843 5.074219 7.863281 9.769531 7.863281h53.3125v40h-53.3125c-4.695312 0-8.761719 3.269531-9.769531 7.859375-3.277344 14.976563-9.207031 29.246094-17.507813 42.128906-2.535156 3.957031-1.972656 9.148438 1.351563 12.472657l37.738281 37.730468-28.289062 28.300782-37.730469-37.742188c-3.324219-3.328125-8.519531-3.890625-12.480469-1.351562-12.886719 8.304687-27.152344 14.238281-42.128906 17.519531-4.59375 1-7.871094 5.070312-7.871094 9.769531v53.300781h-40v-53.300781c0-4.699219-3.277344-8.769531-7.871094-9.769531-14.976562-3.28125-29.242187-9.214844-42.128906-17.519531-3.960938-2.539063-9.15625-1.976563-12.480469 1.351562l-37.730469 37.742188-28.28125-28.292969 37.730469-37.730469c3.332031-3.324219 3.890625-8.519531 1.351563-12.480469-8.304688-12.894531-14.238282-27.167969-17.519532-42.148437-1.007812-4.589844-5.070312-7.851563-9.769531-7.851563h-53.300781zm0 0" />
                <path
                  d="m210 288.832031c44.183594 0 80-35.8125 80-80 0-44.183593-35.816406-80-80-80s-80 35.816407-80 80c.046875 44.160157 35.839844 79.953125 80 80zm0-140c33.132812 0 60 26.867188 60 60 0 33.136719-26.867188 60-60 60s-60-26.863281-60-60c.035156-33.125 26.875-59.964843 60-60zm0 0" />
                <path
                  d="m210 318.832031c60.75 0 110-49.246093 110-110 0-60.75-49.25-110-110-110s-110 49.25-110 110c.074219 60.722657 49.277344 109.929688 110 110zm0-200c49.707031 0 90 40.292969 90 90s-40.292969 90-90 90-90-40.292969-90-90c.054688-49.679687 40.316406-89.945312 90-90zm0 0" />
                <path
                  d="m570 458.832031v-80c0-5.519531-4.476562-10-10-10h-20v-80c0-5.519531-4.476562-10-10-10h-90c-5.523438 0-10 4.480469-10 10v80h-50c-5.523438 0-10 4.480469-10 10v80h-320c-27.601562.035157-49.9648438 22.398438-50 50v20c.0351562 27.605469 22.398438 49.96875 50 50h520c27.601562-.03125 49.964844-22.394531 50-50v-20c-.035156-27.601562-22.398438-49.964843-50-50zm-20 0h-70v-70h70zm-100-160h70v70h-70zm-60 90h70v70h-70zm210 140c0 16.570313-13.433594 30-30 30h-520c-16.566406 0-30-13.429687-30-30v-20c0-16.566406 13.433594-30 30-30h520c16.566406 0 30 13.433594 30 30zm0 0" />
                <path
                  d="m310 488.832031c-16.566406 0-30 13.433594-30 30 0 16.570313 13.433594 30 30 30s30-13.429687 30-30c0-16.566406-13.433594-30-30-30zm0 40c-5.523438 0-10-4.476562-10-10 0-5.519531 4.476562-10 10-10s10 4.480469 10 10c0 5.523438-4.476562 10-10 10zm0 0" />
                <path
                  d="m210 488.832031c-16.566406 0-30 13.433594-30 30 0 16.570313 13.433594 30 30 30s30-13.429687 30-30c0-16.566406-13.433594-30-30-30zm0 40c-5.523438 0-10-4.476562-10-10 0-5.519531 4.476562-10 10-10s10 4.480469 10 10c0 5.523438-4.476562 10-10 10zm0 0" />
                <path
                  d="m410 488.832031c-16.566406 0-30 13.433594-30 30 0 16.570313 13.433594 30 30 30s30-13.429687 30-30c0-16.566406-13.433594-30-30-30zm0 40c-5.523438 0-10-4.476562-10-10 0-5.519531 4.476562-10 10-10s10 4.480469 10 10c0 5.523438-4.476562 10-10 10zm0 0" />
                <path
                  d="m110 488.832031c-16.566406 0-30 13.433594-30 30 0 16.570313 13.433594 30 30 30s30-13.429687 30-30c0-16.566406-13.433594-30-30-30zm0 40c-5.523438 0-10-4.476562-10-10 0-5.519531 4.476562-10 10-10s10 4.480469 10 10c0 5.523438-4.476562 10-10 10zm0 0" />
                <path
                  d="m510 488.832031c-16.566406 0-30 13.433594-30 30 0 16.570313 13.433594 30 30 30s30-13.429687 30-30c0-16.566406-13.433594-30-30-30zm0 40c-5.523438 0-10-4.476562-10-10 0-5.519531 4.476562-10 10-10s10 4.480469 10 10c0 5.523438-4.476562 10-10 10zm0 0" />
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
              </div>
            </div>
            </a>
            <!-- End Widget Linearea Two -->
          </div>

          <div class="col-xl-4 col-md-6">
            <!-- Widget Linearea Three -->
            <div style="height: 70%;" class="card card-shadow" id="widgetLineareaThree">
              <div class="card-block pt-10">
                <div class="clearfix">
                <div class="grey-800" style="text-align: center;">
                  <h4><b>Inventory System</b></h4>
                </div>
                  <!-- <span class="float-right grey-700 font-size-30">1,864</span> -->
                </div>
                <!-- <div class="ct-chart h-50"></div> -->
                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 349.667 780" style="enable-background:new 0 0 349.667 780;" xml:space="preserve" width="350px" height="150px">
                <g>
                <path
                    d="m256 .136-256 172.974v338.754h512v-338.754zm-154.492 481.728v-70.667h24.458v25.667h30v-25.667h24.458v70.667zm308.984-215.99h-308.984v-27.343h308.983v27.343zm-200.067 215.99v-70.667h24.458v25.667h30v-25.667h24.458v70.667zm-108.917-100.666v-85.324h308.983v185.99h-91.15v-100.666zm380.492 100.666h-41.508v-273.333h-368.984v273.333h-41.508v-292.818l226-152.704 226 152.704z" />
                  <path
                    d="m207.625 132.489c0 26.674 21.701 48.375 48.375 48.375s48.375-21.701 48.375-48.375-21.701-48.375-48.375-48.375-48.375 21.701-48.375 48.375zm66.75 0c0 10.132-8.243 18.375-18.375 18.375s-18.375-8.243-18.375-18.375 8.243-18.375 18.375-18.375 18.375 8.243 18.375 18.375z" />
                </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g>
                </svg>
              </div>
            </div>
            <!-- End Widget Linearea Three -->
          </div>
          
          <!-- <div class="col-xl-3 col-md-6"> -->
            <!-- Widget Linearea Four -->
            <!-- <div class="card card-shadow" id="widgetLineareaFour">
              <div class="card-block p-20 pt-10">
                <div class="clearfix">
                  <div class="grey-800 float-left py-10">
                    <i class="icon md-view-list grey-600 font-size-24 vertical-align-bottom mr-5"></i>                    Items
                  </div>
                  <span class="float-right grey-700 font-size-30">845</span>
                </div>
                <div class="mb-20 grey-500">
                  <i class="icon md-long-arrow-up green-500 font-size-16"></i>                  18.4% From this yesterday
                </div>
                <div class="ct-chart h-50"></div>
              </div>
            </div> -->
            <!-- End Widget Linearea Four -->
          <!-- </div> -->

          <!-- <div class="col-xxl-7 col-lg-7">
            <div class="card card-shadow">
              <div class="card-block p-0">
                <div id="widgetJvmap" class="h-450"></div>
              </div>
            </div>
          </div> -->

          <!-- <div class="col-xxl-5 col-lg-5">
            <div class="card card-shadow" id="widgetCurrentChart">
              <div class="p-30 white bg-green-500">
                <div class="font-size-20 mb-20">The current chart</div>
                <div class="ct-chart h-200">
                </div>
              </div>
              <div class="bg-white p-30 font-size-14">
                <div class="counter counter-lg text-left">
                  <div class="counter-label mb-5">Approve rate are above average</div>
                  <div class="counter-number-group">
                    <span class="counter-number">12,673</span>
                    <span class="counter-number-related text-uppercase font-size-14">pcs</span>
                  </div>
                </div>
                <button type="button" class="btn-raised btn btn-info btn-floating">
                  <i class="icon md-plus" aria-hidden="true"></i>
                </button>
              </div>
            </div>
          </div> -->

        </div>
      </div>
    </div>
    <!-- End Page -->
  