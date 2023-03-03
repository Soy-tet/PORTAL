<style>
    body{
    margin: 0;
    padding: 0;
    background-color: rgb(221, 221, 221);
    overflow-x: hidden;
    overflow-y: hidden;
}
a{
    text-decoration: none;
}

/* NAV  */
    .container-nav{
        width: 100vw;
        height: 40px;
        display: flex;
        justify-content: space-between;
        box-shadow: rgba(0, 0, 0, 0.15) 1.95px 1.95px 2.6px;
        position: relative;
        background-color: white;
        z-index: 10;
        margin: auto;
        position: sticky;
        top: 0%;
    }
    .container-nav .container-left{
        display: flex;
        padding-left: 20px;
        margin: auto 0px;
    }
    .container-nav .container-left .icon{
        font-size:larger;
    }
    .container-nav .container-left .navBar-head{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        font-size: medium;
        margin-left: 5px;
    }
    .container-nav .container-right{
        display: flex;
        padding-right: 20px;
        margin: auto 0px;
    }
    .container-nav .container-right .header{
        font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
        margin-right: 20px;
    }
    .container-nav .container-right .icon-social{
        font-size: larger;
        margin-right: 30px;
    }
/* container */
.container{
    display: flex;
    padding: 0%;
    margin: 0px;
}
.container .container_left{
    width: 20vw;
    height: 98vh;
    background: rgba(255, 255, 255, 0.17);
    /* box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); */
    backdrop-filter: blur(3.3px);
    -webkit-backdrop-filter: blur(3.3px);
    /* border: 1px solid rgba(255, 255, 255, 0.99); */
    position: sticky;
    overflow-y: hidden;
    top: 40px;
}
.btn-best{
    height: 20px;
    width: 40px;
    font-size: small;
    justify-content: center;
    border-radius: 30px;
    display: flex;
    margin: auto 6px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: rgb(235,12,200);
    background: linear-gradient(90deg, rgba(235,12,200,1) 0%, rgba(250,146,0,1) 100%);
    border: 1px solid rgba(255, 255, 255, 0.99);
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.btn-best2{
    height: 20px;
    width: 40px;
    font-size: small;
    justify-content: center;
    border-radius: 30px;
    display: flex;
    margin: auto 6px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: rgb(235,12,200);
    background: linear-gradient(90deg, rgba(235,12,200,1) 0%, rgba(250,146,0,1) 100%);
    border: 1px solid rgba(255, 255, 255, 0.99);
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin-bottom: 20px;
    position: absolute;
    bottom: 240px;
}
.btn-best5{
    height: 20px;
    width: 80px;
    font-size: small;
    justify-content: center;
    border-radius: 30px;
    display: flex;
    margin: 20px 20px;
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    background: rgb(235,12,200);
    background: linear-gradient(90deg, rgba(235,12,200,1) 0%, rgba(250,146,0,1) 100%);
    border: 1px solid rgba(255, 255, 255, 0.99);
    align-items: center;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
.container .container_left div h2 .top-team{
    color: rgb(4, 28, 73);
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    font-size: medium;
    margin-top: 0;
}
.container .container_left div{
    display: block;
}
.container .container_left div .team{
    display: flex;
    justify-content: space-between;
    width: 100%;
}
.container .container_left div .team:hover{
    background-color: #00044607;
    cursor: pointer;
}
.container .container_left div div .container_icon_team{
    display: flex;
    padding-left: 10px;
    height: 50px;
}
.container .container_left div div .container_icon_team img{
    width: 2em;
    height: 2em;
    display: flex;
    margin: auto;
    border-radius: 5px;
    margin-right: 5px;
}
.container .container_left div div .container_icon_team .team_des{
    display: block;
    width: 10vw;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    margin: auto;
    align-items: center;
    align-content: center;
}
.container .container_left div div .container_icon_team .team_des p{
    font-size: medium;
    margin: auto;
}
.container .container_left div div .container_icon_team .team_des .des{
    font-size: 10px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
    color: rgba(13, 70, 43, 0.534);
}
.container .container_left div div p{
    font-family:'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: medium;
}
.container .container_left div div h2{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: medium;
    margin: auto;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: ellipsis;
}
/* CSS */
.button-37 {
  background-color: #13aa9d;
  border: 1px solid #13aa9d;
  border-radius: 4px;
  /* box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0; */
  box-sizing: border-box;
  color: #fff;
  cursor: pointer;
  font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
  font-size: 16px;
  font-weight: 400;
  outline: none;
  outline: 0;
  text-align: center;
  transform: translateY(0);
  transition: transform 150ms, box-shadow 150ms;
  user-select: none;
  -webkit-user-select: none;
  touch-action: manipulation;
  margin:auto;
  margin-top: 2vh;
  margin-bottom: 3vh;
  display: flex;
}
.button-38 {
    background-color: #e25444;
    border: 1px solid #e25444;
    border-radius: 3px;
    /* box-shadow: rgba(0, 0, 0, .1) 0 2px 4px 0; */
    box-sizing: border-box;
    color: #fff;
    cursor: pointer;
    font-family: "Akzidenz Grotesk BQ Medium", -apple-system, BlinkMacSystemFont, sans-serif;
    font-size: 16px;
    font-weight: 400;
    outline: none;
    outline: 0;
    text-align: center;
    transform: translateY(0);
    transition: transform 150ms, box-shadow 150ms;
    user-select: none;
    -webkit-user-select: none;
    touch-action: manipulation;
    margin:auto;
    display: flex;
    padding: 10px;
    margin-top: -25px;
  }

.button-37:hover {
  box-shadow: rgba(0, 0, 0, .15) 0 3px 9px 0;
  transform: translateY(-2px);
}
.button-38:hover {
  box-shadow: rgba(255, 38, 0, 0.336) 0 3px 9px 0;
  transform: translateY(-2px);
}

@media (min-width: 768px) {
  .button-37 {
    padding: 10px 30px;
  }
  .button-38 {
    padding: 10px 30px;
  }
}
/* CARD PREMUIM PLAN  */
            .plan-card {
                background: #fff;
                width: 13vw;
                padding-left: 1rem;
                padding-right: 1rem;
                padding-top: 10px;
                padding-bottom: 20px;
                border-radius: 10px;
                border-bottom: 4px solid #000446;
                box-shadow: 0 6px 30px rgba(207, 212, 222, 0.3);
                font-family: "Poppins", sans-serif;
                margin-top: 10px;
                background: rgba(255, 255, 255, 0.17);
                box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
                backdrop-filter: blur(3.3px);
                -webkit-backdrop-filter: blur(3.3px);
                border: 1px solid rgba(255, 255, 255, 0.99);
                margin: auto;
                position: absolute;
                bottom: 30px;
                left: 2.5vw;
            }
            @media (max-width: 1200px) {
                .plan-card {
                  width: 10vw;
                }
              }
            .plan-card h2 {
                margin-bottom: 15px;
                font-size: 27px;
                font-weight: 600;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .plan-card h2 span {
                display: block;
                margin-top: -4px;
                color: #4d4d4d;
                font-size: 12px;
                font-weight: 400;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .etiquet-price {
                position: relative;
                background: #fdbd4a;
                width: 13.2vw;
                margin-left: -0.65rem;
                padding: .2rem 1.2rem;
                border-radius: 5px 0 0 5px;
            }
            @media (max-width: 1200px) {
                .etiquet-price {
                    width: 10vw;
                }
              }
            .etiquet-price p {
                margin: 0;
                padding-top: .4rem;
                display: flex;
                font-size: 1.9rem;
                font-weight: 500;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .etiquet-price p:before {
                content: "$";
                margin-right: 5px;
                font-size: 15px;
                font-weight: 300;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .etiquet-price p:after {
                content: "/ handle";
                margin-left: 5px;
                font-size: 15px;
                font-weight: 300;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .etiquet-price div {
                position: absolute;
                bottom: -23px;
                right: 0px;
                width: 0;
                height: 0;
                border-top: 13px solid #c58102;
                border-bottom: 10px solid transparent;
                border-right: 13px solid transparent;
                z-index: -6;
            }
            
            .benefits-list {
                margin-top: 16px;
            }
            
            .benefits-list div {
                padding: 0;
                font-size: 14px;
            }
            
            .benefits-list div .benefits{
                color: #4d4d4d;
                list-style: none;
                margin-bottom: .2rem;
                display: flex;
                align-items: center;
                width: 9vw;
                justify-content: space-between;
            }
            
            .benefits-list div div svg {
                width: .9rem;
                fill: currentColor;
            }
            
            .benefits-list div div span {
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .button-get-plan {
                display: flex;
                justify-content: center;
                margin-top: 1.2rem;
            }
            
            .button-get-plan a {
                display: flex;
                justify-content: center;
                align-items: center;
                background: #000446;
                color: #fff;
                padding: 10px 15px;
                border-radius: 5px;
                text-decoration: none;
                font-size: .8rem;
                letter-spacing: .05rem;
                font-weight: 500;
                transition: all 0.3s ease;
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
            
            .button-get-plan a:hover {
                transform: translateY(-3%);
                box-shadow: 0 3px 10px rgba(207, 212, 222, 0.9);
            }
            
            .button-get-plan .svg-rocket {
                margin-right: 10px;
                width: .9rem;
                fill: currentColor;
            }
            .btn-start{
                white-space: nowrap;
                overflow: hidden;
                text-overflow: ellipsis;
            }
/* Center SIDE  */
.container_center{
    width: 60vw;
    height:100vh;
    overflow-y: scroll;
    align-self: auto;
}
.scroll{
    display: block;
    overflow-y: scroll;
}
.pano_content{
    padding: 0;
}
.pano_content img{
    object-fit: cover;
    height: 30vh;
    width: 100%;
    object-position:center;
    -o-object-fit: cover;
}
.suggestion{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    text-align: center;
}
/* CONTAINER-TEAM  */
.container_team{
    display: flex;
    width: 60vw;
    display: grid;
    grid-template-columns: 1fr 1fr 1fr 1fr 1fr 1fr 1fr;
    margin: auto;
    /* background-color: #e25444; */
    text-align: center;
}
@media screen and (max-width: 1280px){
    .container_team{
        display: flex;
        display: grid;
        grid-template-columns: 1fr 1fr 1fr 1fr 1fr;
        margin: auto;
        /* background-color: #e25444; */
        text-align: center;
    }
}
.container_team .container_card_team{
    display: block;
    padding-top: 10px;
    border-radius: 10px;
    padding-bottom: 0%;
    transition: 0s;
}
.container_team .container_card_team:hover{
    background-color: #13074a10;
    cursor: pointer;
    padding-top: 9px;
}
.container_team .container_card_team .name_team{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    /* margin-left: 20px; */
    margin-bottom: 0%;
    padding: 0%;
}
.container_team .container_card_team .team_member{
    font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
    font-size: small;
    color: #0000009f;
    padding: 0%;
    margin:0%;
    font-style:italic;
}
.container_team .container_card_team img{
    width: 140px;
    height: 140px;
    object-fit: cover;
    border-radius: 10px;
    padding: 0px;
    margin: 0px;
}
/* <!-- SIDE RIGHT CONTENT --> */
.container_right{
    width: 20vw;
    height: 100vh;
                 /* height: 85.5vh; */
    background-color: beige;
        /* From https://css.glass */
    background: rgba(255, 255, 255, 0.17);
    /* box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1); */
    backdrop-filter: blur(3.3px);
    -webkit-backdrop-filter: blur(3.3px);
    /* border: 1px solid rgba(255, 255, 255, 0.99); */
    max-width: 50vw;
    position: sticky;
    top: 2vh;
    z-index: 5;
    position: sticky;
    top: 40px;
}



html,
:root {
  --color-1: #040404;
  --color-2: #f9f9f9;
}
.switch {
  position: relative;
  display: inline-block;

  width: 3rem;
  height: 1.5rem;
  margin-left: 20px;
  margin-right: 20px;
}

.switch__input {
  opacity: 0;
  width: 0;
  height: 0;
}

.switch__slider {
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;

  background: #4CB399;
  border-radius: 1rem;

  transition: background 0.2s;
  cursor: pointer;
}

.switch__slider::before {
  content: "";

  position: absolute;
  left: 0.2rem;
  top: 50%;
  transform: translateY(-50%);

  height: 1.2rem;
  width: 1.2rem;
  border-radius: 1.6rem;

  background: var(--color-1);
  transition: transform 0.2s, width 0.2s, background 0.2s;
}

.switch__input:checked + .switch__slider {
  background: var(--color-2);
}

.switch__input:not(:checked):active + .switch__slider::before {
  width: 2.4rem;
}

.switch__input:checked:active + .switch__slider::before {
  transform: translate(1rem, -50%);
  width: 2.4rem;
}

.switch__input:checked + .switch__slider::before {
  transform: translate(1.8rem, -50%);
}


</style>