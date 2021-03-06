$font-primary: #3d3d3d;


.card {
          margin: 0 auto;
          .carousel-item {
            height: 200px;
          }
          .carousel-caption {
            padding: 0;
            right: 0;
            left: 0;
            color: $font-primary;
            h3 {
              color: $font-primary;
            }
            p {
              line-height: 30px;
            }
            .col-sm-3 {
              display: flex;
              align-items: center;
            }
            .col-sm-9 {
              text-align: left;
            }
          }
          .carousel-control-prev, .carousel-control-next {
            color: $font-primary!important;
            opacity: 1!important;
          }
        }