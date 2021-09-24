<!DOCTYPE html>
<?php include __DIR__ . '/profile.php';?>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content='width=450' />
    <title>B2M Overwatch Score Board</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        @font-face {
        font-family: BigNoodleToo;
        src: url(fonts/bignoodletoo.ttf);
        }
        @font-face {
            font-family: Futura;
            src: url(fonts/Futura.ttf);
        }
    </style>    
    <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
</head>
<body>

<div class="profile-background">

        <div class="Navbar-container">

                <div class="Navbar-mobileOverlay Navbar-overlay"></div>
                <a class="Navbar-Sitemenu">
                <div class="Navbar-Sitemenu-icon">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 48 48" focusable="false">
                <rect x="15" y="16" width="18" height="2"></rect>
                <rect x="15" y="23" width="18" height="2"></rect>
                <rect x="15" y="30" width="18" height="2"></rect>
                </svg>
                </div>
                </a>
                <div class="navbar-ovlogo-div">   
                <img class="navbar-ovlogo" src="https://static.playoverwatch.com/img/logos/logo--overwatch-7d38f33606.svg"></img>
                </div>

                <div class="menu-wrap">
                <div class="menu-sidebar">
                    <a class="ow-SiteNav-logo" href="javascript:void(0);" data-analytics="overwatch-nav" data-analytics-placement="home">
                    <div class="ow-SiteNavLogo-text"><svg viewBox="0 27 64 9.4">
                    <g>
                    <polygon fill="rgb(255,156,0)" points="10.71 27.11 12.11 29.09 9.32 29.09 10.71 27.11"></polygon>
                    <polygon points="34.85 29.15 33.74 31.79 33.74 31.79 32.59 29.15 31.38 29.15 30.23 31.75 29.14 29.15 27.3 29.15 29.58 34.33 30.73 34.33 31.9 31.72 33.05 34.33 34.29 34.33 36.55 29.15 34.85 29.15"></polygon>
                    <polygon points="60.55 29.15 60.55 30.97 57.38 30.97 57.38 29.15 55.6 29.15 55.6 34.33 57.38 34.33 57.38 32.33 60.55 32.33 60.55 34.33 62.31 34.33 62.31 29.15 60.55 29.15"></polygon>
                    <polygon points="38.65 29.15 35.18 34.33 37.1 34.33 39.26 31 41.39 34.33 43.38 34.33 39.99 29.15 38.65 29.15"></polygon>
                    <polygon points="14.56 29.15 12.61 29.15 10.64 32.3 8.7 29.15 6.7 29.15 9.96 34.33 11.17 34.33 14.56 29.15"></polygon>
                    <polygon points="42.01 29.15 42.01 30.51 44.26 30.51 44.26 34.33 46.03 34.33 46.03 30.51 47.81 30.51 48.71 29.15 42.01 29.15"></polygon>
                    <path d="M6,29.53a2.1,2.1,0,0,0-.61-.08H1.45c-.9,0-1.45.45-1.45,1.17v2.83a1.07,1.07,0,0,0,.61,1l.07,0,1.08-1.09V30.8h3.3v2.46H2.64L1.27,34.62h4.1c.86,0,1.46-.48,1.46-1.17V30.76L6,29.54Z" transform="translate(0 -0.29)"></path>
                    <path d="M53.41,29.44H49.87l-.28,0h-.05l-.15.24h0l-1,1.47v2.27c0,.69.6,1.17,1.45,1.17h3.53a1.31,1.31,0,0,0,1.46-1.17v-.89H53.1v.7H50.18V30.8H53.1v.6h1.77v-.78C54.87,29.91,54.29,29.44,53.41,29.44Z" transform="translate(0 -0.29)"></path>
                    <polygon points="14.47 30.45 14.47 34.33 19.95 34.33 19.95 32.97 16.24 32.97 16.24 32.31 18.74 32.31 18.74 31.13 16.24 31.13 16.24 30.51 19.95 30.51 19.95 29.15 15.37 29.15 14.47 30.45"></polygon>
                    <path d="M25.66,32.68c.63,0,1.31-.33,1.31-.94V30.5c0-.65-.51-1.06-1.33-1.06H20.73v5.18H22.5V30.77h2.77s0,0,0,.05v.78h0a.19.19,0,0,1-.1,0H23.3v1l2.17,1.95h2.42l-2.23-1.94Z" transform="translate(0 -0.29)"></path>
                    <polygon fill="rgb(255,156,0)" points="39.28 36.31 37.88 34.33 40.67 34.33 39.28 36.31"></polygon>
                    <path d="M63.32,29.59h.26l.07,0a.16.16,0,0,1,.05.13.15.15,0,0,1-.13.17l.18.24h-.16l-.15-.22v.22h-.13Zm.13.1v.15h.09a.07.07,0,0,0,0-.06.07.07,0,0,0,0-.06l-.08,0Z" transform="translate(0 -0.29)"></path>
                    <path d="M63.5,30.37a.5.5,0,1,1,.5-.5A.5.5,0,0,1,63.5,30.37Zm.41-.5a.41.41,0,1,0-.41.41A.41.41,0,0,0,63.91,29.87Z" transform="translate(0 -0.29)"></path>
                    </g>
                    </svg>
                    </div>
                    </a>
                <ul class="menu">
                <li><a class="menu-item 1" href="javascript:void(0);">BrShadow</a></li>
                <li><a class="menu-item 2" href="javascript:void(0);">BfHarkonnen</a></li>
                <li><a class="menu-item 3" href="javascript:void(0);">Aristocrat</a></li>
                <li><a class="menu-item 4" href="javascript:void(0);">Malardiq</a></li>
                <li><a class="menu-item 5" href="javascript:void(0);">Total</a></li>
                </ul>
                    <div class="Navbar-modalClose Navbar-icon">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 64 64" focusable="false">
                    <path d="M47.949,50.625c-0.64,0-1.28-0.244-1.768-0.732L14.635,18.346c-0.977-0.976-0.977-2.559,0-3.535    c0.976-0.977,2.56-0.977,3.535,0l31.546,31.547c0.977,0.976,0.977,2.559,0,3.535C49.229,50.381,48.589,50.625,47.949,50.625z"></path>
                    <path d="M16.051,50.273c-0.64,0-1.28-0.244-1.768-0.732c-0.977-0.976-0.977-2.559,0-3.535l31.898-31.898    c0.976-0.977,2.56-0.977,3.535,0c0.977,0.976,0.977,2.559,0,3.535L17.818,49.541C17.331,50.029,16.69,50.273,16.051,50.273z"></path>
                    </svg>
                    </div>
                </div>
                </div>
        </div>

    <div class="career-station">

    <div class="profile_1">
        <?php echo $BR_IM;?>
        <h1>BrShadow</h1>
        <div class="profile_block">
        <div style="width: 80px; display: inline-block;"><?php echo $BR_LV;?></div>
        <div style="width: 80px; display: inline-block;"><?php echo $BR_EN;?></div>
        <div style="width: 80px; display: inline-block;"><?php echo $BR_RK;?></div>
        </div>
        <div style="padding-top: 30px;">
            <table class="DataTable">
                <thead><tr>
                    <th class="DataTable-tableHeading" colspan="2">
                        <div style="display: flex; align-items: center;">
                            <svg class="icon" viewBox="0 0 32 32">
                            <path d="M9.7,7.9c1.7-1.3,3.8-2.1,6.2-2.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c2.3,0,4.5,0.8,6.2,2.1l2.6-3.2c-2.4-1.9-5.4-3-8.7-3
			        c-0.1,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-3.3,0-6.3,1.1-8.7,3L9.7,7.9z"></path>
                            <path d="M30.3,16c0-4.2-1.8-8-4.7-10.6l-2.6,3.2c2,1.9,3.2,4.5,3.2,7.5c0,1.9-0.5,3.6-1.4,5.1l-5.7-5.5l-2.6-6.3v9.5l5.6,5.4
			        c-0.3,0.2-0.6,0.4-0.9,0.6l0,0c-1.5,0.9-3.3,1.5-5.2,1.5c0,0-0.1,0-0.1,0l0,0l0,0c0,0-0.1,0-0.1,0c-1.9,0-3.7-0.5-5.2-1.5l0,0
			        c-0.3-0.2-0.6-0.4-0.9-0.6l5.6-5.4V9.3l-2.6,6.3l-5.7,5.5c-0.9-1.5-1.4-3.3-1.4-5.1c0-2.9,1.2-5.6,3.2-7.4L6.3,5.4
			        C3.5,8,1.7,11.8,1.7,16c0,4,1.6,7.5,4.2,10.1h0c1.3,1.3,2.8,2.4,4.6,3.1c0,0,0,0,0,0c0.1,0.1,0.3,0.1,0.4,0.2c0,0,0.1,0,0.1,0.1
			        c0.1,0,0.2,0.1,0.3,0.1c0.5,0.2,1,0.3,1.5,0.4c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0.1
			        c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.5,0
			        c0,0,0,0,0,0l0,0l0,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0l0,0l0,0c0,0,0,0,0,0c0.2,0,0.3,0,0.5,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
			        c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3-0.1c0.1,0,0.1,0,0.2,0
			        c0.1,0,0.2,0,0.3-0.1c0,0,0.1,0,0.1,0c0.5-0.1,1-0.3,1.5-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.1,0.4-0.2
			        c0,0,0,0,0,0c1.7-0.7,3.3-1.8,4.6-3.1l0,0C28.7,23.5,30.3,20,30.3,16z"></path>
                        </svg><h5 class="stat-title">Game</h5>
                        </div>
                    </th></tr></thead>
                <tbody class="DataTable-tableBody">
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042E"><td class="DataTable-tableColumn">Games Lost</td><td class="DataTable-tableColumn"><?php echo $BR_GL;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000385"><td class="DataTable-tableColumn">Games Played</td><td class="DataTable-tableColumn"><?php echo $BR_GP;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042F"><td class="DataTable-tableColumn">Games Tied</td><td class="DataTable-tableColumn"><?php echo $BR_GT;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x08600000000003F5"><td class="DataTable-tableColumn">Games Won</td><td class="DataTable-tableColumn"><?php echo $BR_GW;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000026"><td class="DataTable-tableColumn">Win Rate</td><td class="DataTable-tableColumn"><?php echo $BR_WR."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Tank winrate</td><td class="DataTable-tableColumn"><?php echo $BR_Tank_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">DD winrate</td><td class="DataTable-tableColumn"><?php echo $BR_DD_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Healer winrate</td><td class="DataTable-tableColumn"><?php echo $BR_Healer_Winrate."%";?></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="profile_2">
        <?php echo $BF_IM;?>
        <h1>BFHarkonnen</h1>
        <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $BF_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BF_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BF_RK;?></div>
        </div>
        <div style="padding-top: 30px;">
            <table class="DataTable">
                <thead><tr>
                    <th class="DataTable-tableHeading" colspan="2">
                        <div style="display: flex; align-items: center;">
                            <svg class="icon" viewBox="0 0 32 32">
                                <path d="M9.7,7.9c1.7-1.3,3.8-2.1,6.2-2.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c2.3,0,4.5,0.8,6.2,2.1l2.6-3.2c-2.4-1.9-5.4-3-8.7-3
			        c-0.1,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-3.3,0-6.3,1.1-8.7,3L9.7,7.9z"></path>
                                <path d="M30.3,16c0-4.2-1.8-8-4.7-10.6l-2.6,3.2c2,1.9,3.2,4.5,3.2,7.5c0,1.9-0.5,3.6-1.4,5.1l-5.7-5.5l-2.6-6.3v9.5l5.6,5.4
			        c-0.3,0.2-0.6,0.4-0.9,0.6l0,0c-1.5,0.9-3.3,1.5-5.2,1.5c0,0-0.1,0-0.1,0l0,0l0,0c0,0-0.1,0-0.1,0c-1.9,0-3.7-0.5-5.2-1.5l0,0
			        c-0.3-0.2-0.6-0.4-0.9-0.6l5.6-5.4V9.3l-2.6,6.3l-5.7,5.5c-0.9-1.5-1.4-3.3-1.4-5.1c0-2.9,1.2-5.6,3.2-7.4L6.3,5.4
			        C3.5,8,1.7,11.8,1.7,16c0,4,1.6,7.5,4.2,10.1h0c1.3,1.3,2.8,2.4,4.6,3.1c0,0,0,0,0,0c0.1,0.1,0.3,0.1,0.4,0.2c0,0,0.1,0,0.1,0.1
			        c0.1,0,0.2,0.1,0.3,0.1c0.5,0.2,1,0.3,1.5,0.4c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0.1
			        c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.5,0
			        c0,0,0,0,0,0l0,0l0,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0l0,0l0,0c0,0,0,0,0,0c0.2,0,0.3,0,0.5,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
			        c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3-0.1c0.1,0,0.1,0,0.2,0
			        c0.1,0,0.2,0,0.3-0.1c0,0,0.1,0,0.1,0c0.5-0.1,1-0.3,1.5-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.1,0.4-0.2
			        c0,0,0,0,0,0c1.7-0.7,3.3-1.8,4.6-3.1l0,0C28.7,23.5,30.3,20,30.3,16z"></path>
                            </svg><h5 class="stat-title">Game</h5>
                        </div>
                    </th></tr></thead>
                <tbody class="DataTable-tableBody">
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042E"><td class="DataTable-tableColumn">Games Lost</td><td class="DataTable-tableColumn"><?php echo $BF_GL;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000385"><td class="DataTable-tableColumn">Games Played</td><td class="DataTable-tableColumn"><?php echo $BF_GP;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042F"><td class="DataTable-tableColumn">Games Tied</td><td class="DataTable-tableColumn"><?php echo $BF_GT;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x08600000000003F5"><td class="DataTable-tableColumn">Games Won</td><td class="DataTable-tableColumn"><?php echo $BF_GW;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000026"><td class="DataTable-tableColumn">Win Rate</td><td class="DataTable-tableColumn"><?php echo $BF_WR."%";?>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Tank winrate</td><td class="DataTable-tableColumn"><?php echo $BF_Tank_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">DD winrate</td><td class="DataTable-tableColumn"><?php echo $BF_DD_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Healer winrate</td><td class="DataTable-tableColumn"><?php echo $BF_Healer_Winrate."%";?></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="profile_3">
        <?php echo $MO_IM;?>
        <h1>Aristocrat</h1>
        <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $MO_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MO_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MO_RK;?></div>
        </div>
        <div style="padding-top: 30px;">
            <table class="DataTable">
                <thead><tr>
                    <th class="DataTable-tableHeading" colspan="2">
                        <div style="display: flex; align-items: center;">
                            <svg class="icon" viewBox="0 0 32 32">
                                <path d="M9.7,7.9c1.7-1.3,3.8-2.1,6.2-2.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c2.3,0,4.5,0.8,6.2,2.1l2.6-3.2c-2.4-1.9-5.4-3-8.7-3
			        c-0.1,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-3.3,0-6.3,1.1-8.7,3L9.7,7.9z"></path>
                                <path d="M30.3,16c0-4.2-1.8-8-4.7-10.6l-2.6,3.2c2,1.9,3.2,4.5,3.2,7.5c0,1.9-0.5,3.6-1.4,5.1l-5.7-5.5l-2.6-6.3v9.5l5.6,5.4
			        c-0.3,0.2-0.6,0.4-0.9,0.6l0,0c-1.5,0.9-3.3,1.5-5.2,1.5c0,0-0.1,0-0.1,0l0,0l0,0c0,0-0.1,0-0.1,0c-1.9,0-3.7-0.5-5.2-1.5l0,0
			        c-0.3-0.2-0.6-0.4-0.9-0.6l5.6-5.4V9.3l-2.6,6.3l-5.7,5.5c-0.9-1.5-1.4-3.3-1.4-5.1c0-2.9,1.2-5.6,3.2-7.4L6.3,5.4
			        C3.5,8,1.7,11.8,1.7,16c0,4,1.6,7.5,4.2,10.1h0c1.3,1.3,2.8,2.4,4.6,3.1c0,0,0,0,0,0c0.1,0.1,0.3,0.1,0.4,0.2c0,0,0.1,0,0.1,0.1
			        c0.1,0,0.2,0.1,0.3,0.1c0.5,0.2,1,0.3,1.5,0.4c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0.1
			        c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.5,0
			        c0,0,0,0,0,0l0,0l0,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0l0,0l0,0c0,0,0,0,0,0c0.2,0,0.3,0,0.5,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
			        c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3-0.1c0.1,0,0.1,0,0.2,0
			        c0.1,0,0.2,0,0.3-0.1c0,0,0.1,0,0.1,0c0.5-0.1,1-0.3,1.5-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.1,0.4-0.2
			        c0,0,0,0,0,0c1.7-0.7,3.3-1.8,4.6-3.1l0,0C28.7,23.5,30.3,20,30.3,16z"></path>
                            </svg><h5 class="stat-title">Game</h5>
                        </div>
                    </th></tr></thead>
                <tbody class="DataTable-tableBody">
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042E"><td class="DataTable-tableColumn">Games Lost</td><td class="DataTable-tableColumn"><?php echo $MO_GL;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000385"><td class="DataTable-tableColumn">Games Played</td><td class="DataTable-tableColumn"><?php echo $MO_GP;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042F"><td class="DataTable-tableColumn">Games Tied</td><td class="DataTable-tableColumn"><?php echo $MO_GT;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x08600000000003F5"><td class="DataTable-tableColumn">Games Won</td><td class="DataTable-tableColumn"><?php echo $MO_GW;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000026"><td class="DataTable-tableColumn">Win Rate</td><td class="DataTable-tableColumn"><?php echo $MO_WR."%";?>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Tank winrate</td><td class="DataTable-tableColumn"><?php echo $MO_Tank_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">DD winrate</td><td class="DataTable-tableColumn"><?php echo $MO_DD_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Healer winrate</td><td class="DataTable-tableColumn"><?php echo $MO_Healer_Winrate."%";?></td></tr>
                </tbody>
            </table>
        </div>
    </div>
    <div class="profile_4">
        <?php echo $MQ_IM;?>
        <h1>Malarqiq</h1>
        <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_RK;?></div>
        </div>
        <div style="padding-top: 30px;">
            <table class="DataTable">
                <thead><tr>
                    <th class="DataTable-tableHeading" colspan="2">
                        <div style="display: flex; align-items: center;">
                            <svg class="icon" viewBox="0 0 32 32">
                                <path d="M9.7,7.9c1.7-1.3,3.8-2.1,6.2-2.1c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0c2.3,0,4.5,0.8,6.2,2.1l2.6-3.2c-2.4-1.9-5.4-3-8.7-3
			        c-0.1,0-0.1,0-0.1,0c0,0-0.1,0-0.1,0c-3.3,0-6.3,1.1-8.7,3L9.7,7.9z"></path>
                                <path d="M30.3,16c0-4.2-1.8-8-4.7-10.6l-2.6,3.2c2,1.9,3.2,4.5,3.2,7.5c0,1.9-0.5,3.6-1.4,5.1l-5.7-5.5l-2.6-6.3v9.5l5.6,5.4
			        c-0.3,0.2-0.6,0.4-0.9,0.6l0,0c-1.5,0.9-3.3,1.5-5.2,1.5c0,0-0.1,0-0.1,0l0,0l0,0c0,0-0.1,0-0.1,0c-1.9,0-3.7-0.5-5.2-1.5l0,0
			        c-0.3-0.2-0.6-0.4-0.9-0.6l5.6-5.4V9.3l-2.6,6.3l-5.7,5.5c-0.9-1.5-1.4-3.3-1.4-5.1c0-2.9,1.2-5.6,3.2-7.4L6.3,5.4
			        C3.5,8,1.7,11.8,1.7,16c0,4,1.6,7.5,4.2,10.1h0c1.3,1.3,2.8,2.4,4.6,3.1c0,0,0,0,0,0c0.1,0.1,0.3,0.1,0.4,0.2c0,0,0.1,0,0.1,0.1
			        c0.1,0,0.2,0.1,0.3,0.1c0.5,0.2,1,0.3,1.5,0.4c0,0,0.1,0,0.1,0c0.1,0,0.2,0,0.3,0.1c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0.1
			        c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.1,0,0.2,0c0.2,0,0.4,0,0.5,0
			        c0,0,0,0,0,0l0,0l0,0c0,0,0.1,0,0.1,0c0,0,0.1,0,0.1,0l0,0l0,0c0,0,0,0,0,0c0.2,0,0.3,0,0.5,0c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0
			        c0.1,0,0.1,0,0.2,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3,0c0.1,0,0.2,0,0.3-0.1c0.1,0,0.1,0,0.2,0
			        c0.1,0,0.2,0,0.3-0.1c0,0,0.1,0,0.1,0c0.5-0.1,1-0.3,1.5-0.4c0.1,0,0.2-0.1,0.3-0.1c0,0,0.1,0,0.1-0.1c0.1-0.1,0.3-0.1,0.4-0.2
			        c0,0,0,0,0,0c1.7-0.7,3.3-1.8,4.6-3.1l0,0C28.7,23.5,30.3,20,30.3,16z"></path>
                            </svg><h5 class="stat-title">Game</h5>
                        </div>
                    </th></tr></thead>
                <tbody class="DataTable-tableBody">
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042E"><td class="DataTable-tableColumn">Games Lost</td><td class="DataTable-tableColumn"><?php echo $MQ_GL;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000385"><td class="DataTable-tableColumn">Games Played</td><td class="DataTable-tableColumn"><?php echo $MQ_GP;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x086000000000042F"><td class="DataTable-tableColumn">Games Tied</td><td class="DataTable-tableColumn"><?php echo $MQ_GT;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x08600000000003F5"><td class="DataTable-tableColumn">Games Won</td><td class="DataTable-tableColumn"><?php echo $MQ_GW;?></td></tr>
                <tr class="DataTable-tableRow" data-stat-id="0x0860000000000026"><td class="DataTable-tableColumn">Win Rate</td><td class="DataTable-tableColumn"><?php echo $MQ_WR."%";?>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Tank winrate</td><td class="DataTable-tableColumn"><?php echo $MQ_Tank_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">DD winrate</td><td class="DataTable-tableColumn"><?php echo $MQ_DD_Winrate."%";?></td></tr>
                <tr class="DataTable-tableRow" ><td class="DataTable-tableColumn">Healer winrate</td><td class="DataTable-tableColumn"><?php echo $MQ_Healer_Winrate."%";?></td></tr>
                </tbody>
            </table>
        </div>
    </div>

    </div>

    <div class="total">
        <div class="total_profile">    
            <?php echo $BR_IM;?>
            <h1>BrShadow</h1>
            <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $BR_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BR_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BR_RK;?></div>
            </div>
        </div>
        <div class="total_profile">
            <?php echo $BF_IM;?>
            <h1>BFHarkonnen</h1>
            <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $BF_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BF_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $BF_RK;?></div>
            </div>
        </div>
        <div class="total_profile">
            <?php echo $MO_IM;?>
            <h1>Aristocrat</h1>
            <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $MO_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MO_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MO_RK;?></div>
            </div>
        </div>
        <div class="total_profile">
            <?php echo $MQ_IM;?>
            <h1>Malardiq</h1>
            <div class="profile_block">
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_LV;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_EN;?></div>
            <div style="width: 80px; display: inline-block;"><?php echo $MQ_RK;?></div>
            </div>
        </div>
    </div>

</div>
<script src="script.js"></script>
</body>
</html>