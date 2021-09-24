<?php

include __DIR__ . '/phpQuery.php';

$BR_profile_html = file_get_contents('./profiles/br_profile.html');
$D_1 = phpQuery::newDocument($BR_profile_html);
$BR_IM = $D_1->find('.player-portrait');
$BR_LV = $D_1->find('.player-level:eq(0)');
$BR_RK = $D_1->find('.competitive-rank:eq(0)');
$BR_GL = $D_1->find('[data-stat-id="0x086000000000042E"]:eq(1)>td:eq(1)')->text();
$BR_GP = $D_1->find('[data-stat-id="0x0860000000000385"]:eq(1)>td:eq(1)')->text();
$BR_GT = $D_1->find('[data-stat-id="0x086000000000042F"]:eq(1)>td:eq(1)')->text();
$BR_GW = $D_1->find('[data-stat-id="0x08600000000003F5"]:eq(1)>td:eq(1)')->text();

$BR_T_WG_Array = [
    $BR_Tank_1 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(D.Va)')->next()->text(),
    $BR_Tank_2 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Заря)')->next()->text(),
    $BR_Tank_3 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ориса)')->next()->text(),
    $BR_Tank_4 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Райнхардт)')->next()->text(),
    $BR_Tank_5 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сигма)')->next()->text(),
    $BR_Tank_6 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Таран)')->next()->text(),
    $BR_Tank_7 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Турбосвин)')->next()->text(),
    $BR_Tank_8 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Уинстон)')->next()->text(),
];
$BR_T_GP_Array = [
    $BR_T_1_P_Dva = $D_1->find('[data-category-id="0x02E000000000007A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_2_P_Zaray = $D_1->find('[data-category-id="0x02E0000000000068"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_3_P_Orisa = $D_1->find('[data-category-id="0x02E000000000013E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_4_P_Reinhardt = $D_1->find('[data-category-id="0x02E0000000000007"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_5_P_Sigma = $D_1->find('[data-category-id="0x02E000000000023B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_6_P_Wreckingball = $D_1->find('[data-category-id="0x02E00000000001CA"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_7_P_Roadhog = $D_1->find('[data-category-id="0x02E0000000000040"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_T_8_P_Winston = $D_1->find('[data-category-id="0x02E0000000000009"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BR_T_WG = array_sum($BR_T_WG_Array);
$BR_T_PG = array_sum($BR_T_GP_Array);
if ($BR_T_WG !=0) {$BR_Tank_Winrate = round($BR_T_WG/$BR_T_PG*100,2);} else {$BR_Tank_Winrate = "0";}

$BR_DD_WG_Array = [
    $BR_DD_1 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бастион)')->next()->text(),
    $BR_DD_2 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Гэндзи)')->next()->text(),
    $BR_DD_3 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Жнец)')->next()->text(),
    $BR_DD_4 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Крысавчик)')->next()->text(),
    $BR_DD_5 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Кулак Смерти)')->next()->text(),
    $BR_DD_6 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Маккри)')->next()->text(),
    $BR_DD_7 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мэй)')->next()->text(),
    $BR_DD_8 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Роковая Вдова)')->next()->text(),
    $BR_DD_9 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Симметра)')->next()->text(),
    $BR_DD_10 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Солдат-76)')->next()->text(),
    $BR_DD_11 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сомбра)')->next()->text(),
    $BR_DD_12 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Торбьорн)')->next()->text(),
    $BR_DD_13 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Трейсер)')->next()->text(),
    $BR_DD_14 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Фарра)')->next()->text(),
    $BR_DD_15 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Хандзо)')->next()->text(),
    $BR_DD_16 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Эш)')->next()->text(),
];
$BR_DD_PG_Array = [
    $BR_DD_1_P_Bastion = $D_1->find('[data-category-id="0x02E0000000000015"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_1_P_Genji = $D_1->find('[data-category-id="0x02E0000000000029"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_3_P_Reaper = $D_1->find('[data-category-id="0x02E0000000000002"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_4_P_Junkrat = $D_1->find('[data-category-id="0x02E0000000000065"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_5_P_Doomfist = $D_1->find('[data-category-id="0x02E000000000012F"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_6_P_Mccree = $D_1->find('[data-category-id="0x02E0000000000042"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_7_P_Mei = $D_1->find('[data-category-id="0x02E00000000000DD"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_8_P_Widowmaker = $D_1->find('[data-category-id="0x02E000000000000A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_9_P_Symmetra = $D_1->find('[data-category-id="0x02E0000000000016"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_10_P_Soldier76 = $D_1->find('[data-category-id="0x02E000000000006E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_11_P_Sombra = $D_1->find('[data-category-id="0x02E000000000012E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_12_P_Torbjorn = $D_1->find('[data-category-id="0x02E0000000000006"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_13_P_Tracer = $D_1->find('[data-category-id="0x02E0000000000003"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_14_P_Pharah = $D_1->find('[data-category-id="0x02E0000000000008"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_15_P_Hanzo = $D_1->find('[data-category-id="0x02E0000000000005"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_DD_16_P_Ashe = $D_1->find('[data-category-id="0x02E0000000000200"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BR_DD_PG = array_sum($BR_DD_PG_Array);
$BR_DD_WG = array_sum($BR_DD_WG_Array);
if ($BR_DD_WG != 0) {$BR_DD_Winrate = round($BR_DD_WG/$BR_DD_PG*100,2);} else {$BR_DD_Winrate = "0";}

$BR_H_WG_Array = [
    $BR_Healer_1 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ана)')->next()->text(),
    $BR_Healer_2 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ангел)')->next()->text(),
    $BR_Healer_3 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Батист)')->next()->text(),
    $BR_Healer_4 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бригитта)')->next()->text(),
    $BR_Healer_5 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Дзеньятта)')->next()->text(),
    $BR_Healer_6 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Лусио)')->next()->text(),
    $BR_Healer_7 = $D_1->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мойра)')->next()->text(),
];
$BR_H_PG_Array = [
    $BR_H_1_P_Ana = $D_1->find('[data-category-id="0x02E000000000013B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_2_P_Mercy = $D_1->find('[data-category-id="0x02E0000000000004"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_3_P_Baptiste = $D_1->find('[data-category-id="0x02E0000000000221"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_4_P_Brigitte = $D_1->find('[data-category-id="0x02E0000000000195"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_5_P_Zenyatta = $D_1->find('[data-category-id="0x02E0000000000020"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_6_P_Lucio = $D_1->find('[data-category-id="0x02E0000000000079"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BR_H_7_P_Moira = $D_1->find('[data-category-id="0x02E00000000001A2"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BR_H_PG = array_sum($BR_H_PG_Array);
$BR_H_WG = array_sum($BR_H_WG_Array);
if ($BR_H_WG != 0) {$BR_Healer_Winrate = round($BR_H_WG/$BR_H_PG*100,2);} else {$BR_Healer_Winrate = "0";}

$BR_RL = $D_1->find('.EndorsementIcon:eq(0)')-> attr('style');
$BR_RN = $D_1->find('.EndorsementIcon-tooltip:eq(0)')->find('.u-center');
$BR_SVG_1 = $D_1->find('[data-js="endorsement-border"]:eq(0)')->attr('data-value');
$BR_SVG_2 = $D_1->find('[data-js="endorsement-border"]:eq(1)')->attr('data-value');
$BR_SVG_3 = $D_1->find('[data-js="endorsement-border"]:eq(2)')->attr('data-value');
$BR_CA = $BR_GW/($BR_GP-$BR_GT)*100;
$BR_WR = round($BR_CA,2);
$BR_DH_1 = $BR_SVG_1*100-1;
$BR_DH_2 = $BR_SVG_2*100-1;
$BR_DH_3 = $BR_SVG_3*100-1;
$BR_DG_2 = $BR_SVG_1*360;
$BR_DG_3 = (1-$BR_SVG_3)*360;
$BR_EN = "<div class=\"endorsement-level\"><div class=\"EndorsementIcon\" style=\"".$BR_RL."\"><div class=\"EndorsementIcon-inner\"><svg class=\"EndorsementIcon-background\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--shotcaller\" data-js=\"endorsement-border\" data-value=\"".$BR_SVG_1."\" style=\"stroke-dasharray: ".$BR_DH_1."px, 100px; transform: rotate(0deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--teammate\" data-js=\"endorsement-border\" data-value=\"".$BR_SVG_2."\" style=\"stroke-dasharray: ".$BR_DH_2."px, 100px; transform: rotate(".$BR_DG_2."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--sportsmanship\" data-js=\"endorsement-border\" data-value=\"".$BR_SVG_3."\" style=\"stroke-dasharray: ".$BR_DH_3."px, 100px; transform: rotate(".$BR_DG_3."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg></div></div><div class=\"u-center\">".$BR_RN."</div></div>";

$BF_profile_html = file_get_contents('./profiles/bf_profile.html');
$D_2 = phpQuery::newDocument($BF_profile_html);
$BF_IM = $D_2->find('.player-portrait');
$BF_LV = $D_2->find('.player-level:eq(0)');
$BF_RK = $D_2->find('.competitive-rank:eq(0)');
$BF_GL = $D_2->find('[data-stat-id="0x086000000000042E"]:eq(1)>td:eq(1)')->text();
$BF_GP = $D_2->find('[data-stat-id="0x0860000000000385"]:eq(1)>td:eq(1)')->text();
$BF_GT = $D_2->find('[data-stat-id="0x086000000000042F"]:eq(1)>td:eq(1)')->text();
$BF_GW = $D_2->find('[data-stat-id="0x08600000000003F5"]:eq(1)>td:eq(1)')->text();

$BF_T_WG_Array = [
    $BF_Tank_1 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(D.Va)')->next()->text(),
    $BF_Tank_2 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Заря)')->next()->text(),
    $BF_Tank_3 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ориса)')->next()->text(),
    $BF_Tank_4 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Райнхардт)')->next()->text(),
    $BF_Tank_5 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сигма)')->next()->text(),
    $BF_Tank_6 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Таран)')->next()->text(),
    $BF_Tank_7 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Турбосвин)')->next()->text(),
    $BF_Tank_8 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Уинстон)')->next()->text(),
];
$BF_T_GP_Array = [
    $BF_T_1_P_Dva = $D_2->find('[data-category-id="0x02E000000000007A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_2_P_Zaray = $D_2->find('[data-category-id="0x02E0000000000068"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_3_P_Orisa = $D_2->find('[data-category-id="0x02E000000000013E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_4_P_Reinhardt = $D_2->find('[data-category-id="0x02E0000000000007"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_5_P_Sigma = $D_2->find('[data-category-id="0x02E000000000023B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_6_P_Wreckingball = $D_2->find('[data-category-id="0x02E00000000001CA"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_7_P_Roadhog = $D_2->find('[data-category-id="0x02E0000000000040"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_T_8_P_Winston = $D_2->find('[data-category-id="0x02E0000000000009"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BF_T_WG = array_sum($BF_T_WG_Array);
$BF_T_PG = array_sum($BF_T_GP_Array);
if ($BF_T_WG != 0) {$BF_Tank_Winrate = round($BF_T_WG/$BF_T_PG*100,2);} else {$BF_Tank_Winrate = "0";}

$BF_DD_WG_Array = [
    $BF_DD_2 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бастион)')->next()->text(),
    $BF_DD_2 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Гэндзи)')->next()->text(),
    $BF_DD_3 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Жнец)')->next()->text(),
    $BF_DD_4 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Крысавчик)')->next()->text(),
    $BF_DD_5 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Кулак Смерти)')->next()->text(),
    $BF_DD_6 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Маккри)')->next()->text(),
    $BF_DD_7 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мэй)')->next()->text(),
    $BF_DD_8 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Роковая Вдова)')->next()->text(),
    $BF_DD_9 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Симметра)')->next()->text(),
    $BF_DD_20 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Солдат-76)')->next()->text(),
    $BF_DD_21 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сомбра)')->next()->text(),
    $BF_DD_22 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Торбьорн)')->next()->text(),
    $BF_DD_23 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Трейсер)')->next()->text(),
    $BF_DD_24 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Фарра)')->next()->text(),
    $BF_DD_25 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Хандзо)')->next()->text(),
    $BF_DD_26 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Эш)')->next()->text(),
];
$BF_DD_PG_Array = [
    $BF_DD_2_P_Bastion = $D_2->find('[data-category-id="0x02E0000000000015"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_2_P_Genji = $D_2->find('[data-category-id="0x02E0000000000029"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_3_P_Reaper = $D_2->find('[data-category-id="0x02E0000000000002"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_4_P_Junkrat = $D_2->find('[data-category-id="0x02E0000000000065"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_5_P_Doomfist = $D_2->find('[data-category-id="0x02E000000000012F"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_6_P_Mccree = $D_2->find('[data-category-id="0x02E0000000000042"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_7_P_Mei = $D_2->find('[data-category-id="0x02E00000000000DD"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_8_P_Widowmaker = $D_2->find('[data-category-id="0x02E000000000000A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_9_P_Symmetra = $D_2->find('[data-category-id="0x02E0000000000016"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_20_P_Soldier76 = $D_2->find('[data-category-id="0x02E000000000006E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_21_P_SomBFa = $D_2->find('[data-category-id="0x02E000000000012E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_22_P_Torbjorn = $D_2->find('[data-category-id="0x02E0000000000006"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_23_P_Tracer = $D_2->find('[data-category-id="0x02E0000000000003"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_24_P_Pharah = $D_2->find('[data-category-id="0x02E0000000000008"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_25_P_Hanzo = $D_2->find('[data-category-id="0x02E0000000000005"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_DD_26_P_Ashe = $D_2->find('[data-category-id="0x02E0000000000200"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BF_DD_PG = array_sum($BF_DD_PG_Array);
$BF_DD_WG = array_sum($BF_DD_WG_Array);
if ($BF_DD_WG != 0) {$BF_DD_Winrate = round($BF_DD_WG/$BF_DD_PG*100,2);} else {$BF_DD_Winrate = "0";}

$BF_H_WG_Array = [
    $BF_Healer_1 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ана)')->next()->text(),
    $BF_Healer_2 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ангел)')->next()->text(),
    $BF_Healer_3 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Батист)')->next()->text(),
    $BF_Healer_4 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бригитта)')->next()->text(),
    $BF_Healer_5 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Дзеньятта)')->next()->text(),
    $BF_Healer_6 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Лусио)')->next()->text(),
    $BF_Healer_7 = $D_2->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мойра)')->next()->text(),
];
$BF_H_PG_Array = [
    $BF_H_1_P_Ana = $D_2->find('[data-category-id="0x02E000000000013B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_2_P_Mercy = $D_2->find('[data-category-id="0x02E0000000000004"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_3_P_Baptiste = $D_2->find('[data-category-id="0x02E0000000000221"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_4_P_BFigitte = $D_2->find('[data-category-id="0x02E0000000000195"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_5_P_Zenyatta = $D_2->find('[data-category-id="0x02E0000000000020"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_6_P_Lucio = $D_2->find('[data-category-id="0x02E0000000000079"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $BF_H_7_P_Moira = $D_2->find('[data-category-id="0x02E00000000001A2"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$BF_H_PG = array_sum($BF_H_PG_Array);
$BF_H_WG = array_sum($BF_H_WG_Array);
if ($BF_H_WG != 0) {$BF_Healer_Winrate = round($BF_H_WG/$BF_H_PG*100,2);} else {$BF_Healer_Winrate = "0";}

$BF_RL = $D_2->find('.EndorsementIcon:eq(0)')-> attr('style');
$BF_RN = $D_2->find('.EndorsementIcon-tooltip:eq(0)')->find('.u-center');
$BF_SVG_1 = $D_2->find('[data-js="endorsement-border"]:eq(0)')->attr('data-value');
$BF_SVG_2 = $D_2->find('[data-js="endorsement-border"]:eq(1)')->attr('data-value');
$BF_SVG_3 = $D_2->find('[data-js="endorsement-border"]:eq(2)')->attr('data-value');
$BF_CA = $BF_GW/($BF_GP-$BF_GT)*100;
$BF_WR = round($BF_CA,2);
$BF_DH_1 = $BF_SVG_1*100-1;
$BF_DH_2 = $BF_SVG_2*100-1;
$BF_DH_3 = $BF_SVG_3*100-1;
$BF_DG_2 = $BF_SVG_1*360;
$BF_DG_3 = (1-$BF_SVG_3)*360;
$BF_EN = "<div class=\"endorsement-level\"><div class=\"EndorsementIcon\" style=\"".$BF_RL."\"><div class=\"EndorsementIcon-inner\"><svg class=\"EndorsementIcon-background\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--shotcaller\" data-js=\"endorsement-border\" data-value=\"".$BF_SVG_1."\" style=\"stroke-dasharray: ".$BF_DH_1."px, 100px; transform: rotate(0deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--teammate\" data-js=\"endorsement-border\" data-value=\"".$BF_SVG_2."\" style=\"stroke-dasharray: ".$BF_DH_2."px, 100px; transform: rotate(".$BF_DG_2."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--sportsmanship\" data-js=\"endorsement-border\" data-value=\"".$BF_SVG_3."\" style=\"stroke-dasharray: ".$BF_DH_3."px, 100px; transform: rotate(".$BF_DG_3."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg></div></div><div class=\"u-center\">".$BF_RN."</div></div>";

$MO_profile_html = file_get_contents('./profiles/mo_profile.html');
$D_4 = phpQuery::newDocument($MO_profile_html);
$MO_IM = $D_4->find('.player-portrait');
$MO_LV = $D_4->find('.player-level:eq(0)');
$MO_RK = $D_4->find('.competitive-rank:eq(0)');
$MO_GL = $D_4->find('[data-stat-id="0x086000000000042E"]:eq(1)>td:eq(1)')->text();
$MO_GP = $D_4->find('[data-stat-id="0x0860000000000385"]:eq(1)>td:eq(1)')->text();
$MO_GT = $D_4->find('[data-stat-id="0x086000000000042F"]:eq(1)>td:eq(1)')->text();
$MO_GW = $D_4->find('[data-stat-id="0x08600000000003F5"]:eq(1)>td:eq(1)')->text();

$MO_T_WG_Array = [
    $MO_Tank_1 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(D.Va)')->next()->text(),
    $MO_Tank_2 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Заря)')->next()->text(),
    $MO_Tank_3 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ориса)')->next()->text(),
    $MO_Tank_4 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Райнхардт)')->next()->text(),
    $MO_Tank_5 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сигма)')->next()->text(),
    $MO_Tank_6 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Таран)')->next()->text(),
    $MO_Tank_7 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Турбосвин)')->next()->text(),
    $MO_Tank_8 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Уинстон)')->next()->text(),
];
$MO_T_GP_Array = [
    $MO_T_1_P_Dva = $D_4->find('[data-category-id="0x02E000000000007A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_2_P_Zaray = $D_4->find('[data-category-id="0x02E0000000000068"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_3_P_Orisa = $D_4->find('[data-category-id="0x02E000000000013E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_4_P_Reinhardt = $D_4->find('[data-category-id="0x02E0000000000007"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_5_P_Sigma = $D_4->find('[data-category-id="0x02E000000000023B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_6_P_Wreckingball = $D_4->find('[data-category-id="0x02E00000000001CA"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_7_P_Roadhog = $D_4->find('[data-category-id="0x02E0000000000040"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_T_8_P_Winston = $D_4->find('[data-category-id="0x02E0000000000009"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MO_T_WG = array_sum($MO_T_WG_Array);
$MO_T_PG = array_sum($MO_T_GP_Array);
if ($MO_T_WG != 0) {$MO_Tank_Winrate = round($MO_T_WG/$MO_T_PG*100,2);} else {$MO_Tank_Winrate = "0";}

$MO_DD_WG_Array = [
    $MO_DD_4 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бастион)')->next()->text(),
    $MO_DD_4 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Гэндзи)')->next()->text(),
    $MO_DD_3 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Жнец)')->next()->text(),
    $MO_DD_4 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Крысавчик)')->next()->text(),
    $MO_DD_5 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Кулак Смерти)')->next()->text(),
    $MO_DD_6 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Маккри)')->next()->text(),
    $MO_DD_7 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мэй)')->next()->text(),
    $MO_DD_8 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Роковая Вдова)')->next()->text(),
    $MO_DD_9 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Симметра)')->next()->text(),
    $MO_DD_40 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Солдат-76)')->next()->text(),
    $MO_DD_41 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сомбра)')->next()->text(),
    $MO_DD_42 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Торбьорн)')->next()->text(),
    $MO_DD_43 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Трейсер)')->next()->text(),
    $MO_DD_44 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Фарра)')->next()->text(),
    $MO_DD_45 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Хандзо)')->next()->text(),
    $MO_DD_46 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Эш)')->next()->text(),
];
$MO_DD_PG_Array = [
    $MO_DD_4_P_Bastion = $D_4->find('[data-category-id="0x02E0000000000015"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_4_P_Genji = $D_4->find('[data-category-id="0x02E0000000000029"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_3_P_Reaper = $D_4->find('[data-category-id="0x02E0000000000002"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_4_P_Junkrat = $D_4->find('[data-category-id="0x02E0000000000065"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_5_P_Doomfist = $D_4->find('[data-category-id="0x02E000000000012F"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_6_P_Mccree = $D_4->find('[data-category-id="0x02E0000000000042"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_7_P_Mei = $D_4->find('[data-category-id="0x02E00000000000DD"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_8_P_Widowmaker = $D_4->find('[data-category-id="0x02E000000000000A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_9_P_Symmetra = $D_4->find('[data-category-id="0x02E0000000000016"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_40_P_Soldier76 = $D_4->find('[data-category-id="0x02E000000000006E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_41_P_SomMOa = $D_4->find('[data-category-id="0x02E000000000012E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_42_P_Torbjorn = $D_4->find('[data-category-id="0x02E0000000000006"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_43_P_Tracer = $D_4->find('[data-category-id="0x02E0000000000003"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_44_P_Pharah = $D_4->find('[data-category-id="0x02E0000000000008"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_45_P_Hanzo = $D_4->find('[data-category-id="0x02E0000000000005"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_DD_46_P_Ashe = $D_4->find('[data-category-id="0x02E0000000000200"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MO_DD_PG = array_sum($MO_DD_PG_Array);
$MO_DD_WG = array_sum($MO_DD_WG_Array);
if ($MO_DD_WG != 0) {$MO_DD_Winrate = round($MO_DD_WG/$MO_DD_PG*100,2);} else {$MO_DD_Winrate = "0";}

$MO_H_WG_Array = [
    $MO_Healer_1 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ана)')->next()->text(),
    $MO_Healer_2 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ангел)')->next()->text(),
    $MO_Healer_3 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Батист)')->next()->text(),
    $MO_Healer_4 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бригитта)')->next()->text(),
    $MO_Healer_5 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Дзеньятта)')->next()->text(),
    $MO_Healer_6 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Лусио)')->next()->text(),
    $MO_Healer_7 = $D_4->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мойра)')->next()->text(),
];
$MO_H_PG_Array = [
    $MO_H_1_P_Ana = $D_4->find('[data-category-id="0x02E000000000013B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_2_P_Mercy = $D_4->find('[data-category-id="0x02E0000000000004"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_3_P_Baptiste = $D_4->find('[data-category-id="0x02E0000000000221"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_4_P_MOigitte = $D_4->find('[data-category-id="0x02E0000000000195"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_5_P_Zenyatta = $D_4->find('[data-category-id="0x02E0000000000020"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_6_P_Lucio = $D_4->find('[data-category-id="0x02E0000000000079"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MO_H_7_P_Moira = $D_4->find('[data-category-id="0x02E00000000001A2"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MO_H_PG = array_sum($MO_H_PG_Array);
$MO_H_WG = array_sum($MO_H_WG_Array);
if ($MO_H_WG !=0) {$MO_Healer_Winrate  = round($MO_H_WG/$MO_H_PG*100,2);} else {$MO_Healer_Winrate = "0";}

$MO_RL = $D_4->find('.EndorsementIcon:eq(0)')-> attr('style');
$MO_RN = $D_4->find('.EndorsementIcon-tooltip:eq(0)')->find('.u-center');
$MO_SVG_1 = $D_4->find('[data-js="endorsement-border"]:eq(0)')->attr('data-value');
$MO_SVG_2 = $D_4->find('[data-js="endorsement-border"]:eq(1)')->attr('data-value');
$MO_SVG_3 = $D_4->find('[data-js="endorsement-border"]:eq(2)')->attr('data-value');
$MO_CA = $MO_GW/($MO_GP-$MO_GT)*100;
$MO_WR = round($MO_CA,2);
$MO_DH_1 = $MO_SVG_1*100-1;
$MO_DH_2 = $MO_SVG_2*100-1;
$MO_DH_3 = $MO_SVG_3*100-1;
$MO_DG_2 = $MO_SVG_1*360;
$MO_DG_3 = (1-$MO_SVG_3)*360;
$MO_EN = "<div class=\"endorsement-level\"><div class=\"EndorsementIcon\" style=\"".$MO_RL."\"><div class=\"EndorsementIcon-inner\"><svg class=\"EndorsementIcon-background\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--shotcaller\" data-js=\"endorsement-border\" data-value=\"".$MO_SVG_1."\" style=\"stroke-dasharray: ".$MO_DH_1."px, 100px; transform: rotate(0deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--teammate\" data-js=\"endorsement-border\" data-value=\"".$MO_SVG_2."\" style=\"stroke-dasharray: ".$MO_DH_2."px, 100px; transform: rotate(".$MO_DG_2."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--sportsmanship\" data-js=\"endorsement-border\" data-value=\"".$MO_SVG_3."\" style=\"stroke-dasharray: ".$MO_DH_3."px, 100px; transform: rotate(".$MO_DG_3."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg></div></div><div class=\"u-center\">".$MO_RN."</div></div>";

$MQ_profile_html = file_get_contents('./profiles/mq_profile.html');
$D_3 = phpQuery::newDocument($MQ_profile_html);
$MQ_IM = $D_3->find('.player-portrait');
$MQ_LV = $D_3->find('.player-level:eq(0)');
$MQ_RK = $D_3->find('.competitive-rank:eq(0)');
$MQ_GL = $D_3->find('[data-stat-id="0x086000000000042E"]:eq(1)>td:eq(1)')->text();
$MQ_GP = $D_3->find('[data-stat-id="0x0860000000000385"]:eq(1)>td:eq(1)')->text();
$MQ_GT = $D_3->find('[data-stat-id="0x086000000000042F"]:eq(1)>td:eq(1)')->text();
$MQ_GW = $D_3->find('[data-stat-id="0x08600000000003F5"]:eq(1)>td:eq(1)')->text();

$MQ_T_WG_Array = [
    $MQ_Tank_1 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(D.Va)')->next()->text(),
    $MQ_Tank_2 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Заря)')->next()->text(),
    $MQ_Tank_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ориса)')->next()->text(),
    $MQ_Tank_4 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Райнхардт)')->next()->text(),
    $MQ_Tank_5 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сигма)')->next()->text(),
    $MQ_Tank_6 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Таран)')->next()->text(),
    $MQ_Tank_7 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Турбосвин)')->next()->text(),
    $MQ_Tank_8 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Уинстон)')->next()->text(),
];
$MQ_T_GP_Array = [
    $MQ_T_1_P_Dva = $D_3->find('[data-category-id="0x02E000000000007A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_2_P_Zaray = $D_3->find('[data-category-id="0x02E0000000000068"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_3_P_Orisa = $D_3->find('[data-category-id="0x02E000000000013E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_4_P_Reinhardt = $D_3->find('[data-category-id="0x02E0000000000007"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_5_P_Sigma = $D_3->find('[data-category-id="0x02E000000000023B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_6_P_Wreckingball = $D_3->find('[data-category-id="0x02E00000000001CA"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_7_P_Roadhog = $D_3->find('[data-category-id="0x02E0000000000040"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_T_8_P_Winston = $D_3->find('[data-category-id="0x02E0000000000009"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MQ_T_WG = array_sum($MQ_T_WG_Array);
$MQ_T_PG = array_sum($MQ_T_GP_Array);

if ($MQ_T_WG != 0) {$MQ_Tank_Winrate = round($MQ_T_WG/$MQ_T_PG*100,2);} else {$MQ_Tank_Winrate = "0";}

$MQ_DD_WG_Array = [
    $MQ_DD_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бастион)')->next()->text(),
    $MQ_DD_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Гэндзи)')->next()->text(),
    $MQ_DD_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Жнец)')->next()->text(),
    $MQ_DD_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Крысавчик)')->next()->text(),
    $MQ_DD_5 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Кулак Смерти)')->next()->text(),
    $MQ_DD_6 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Маккри)')->next()->text(),
    $MQ_DD_7 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мэй)')->next()->text(),
    $MQ_DD_8 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Роковая Вдова)')->next()->text(),
    $MQ_DD_9 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Симметра)')->next()->text(),
    $MQ_DD_30 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Солдат-76)')->next()->text(),
    $MQ_DD_31 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Сомбра)')->next()->text(),
    $MQ_DD_32 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Торбьорн)')->next()->text(),
    $MQ_DD_33 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Трейсер)')->next()->text(),
    $MQ_DD_34 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Фарра)')->next()->text(),
    $MQ_DD_35 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Хандзо)')->next()->text(),
    $MQ_DD_36 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Эш)')->next()->text(),
];
$MQ_DD_PG_Array = [
    $MQ_DD_3_P_Bastion = $D_3->find('[data-category-id="0x02E0000000000015"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_3_P_Genji = $D_3->find('[data-category-id="0x02E0000000000029"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_3_P_Reaper = $D_3->find('[data-category-id="0x02E0000000000002"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_3_P_Junkrat = $D_3->find('[data-category-id="0x02E0000000000065"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_5_P_Doomfist = $D_3->find('[data-category-id="0x02E000000000012F"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_6_P_Mccree = $D_3->find('[data-category-id="0x02E0000000000042"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_7_P_Mei = $D_3->find('[data-category-id="0x02E00000000000DD"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_8_P_Widowmaker = $D_3->find('[data-category-id="0x02E000000000000A"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_9_P_Symmetra = $D_3->find('[data-category-id="0x02E0000000000016"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_30_P_Soldier76 = $D_3->find('[data-category-id="0x02E000000000006E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_31_P_SomMQa = $D_3->find('[data-category-id="0x02E000000000012E"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_32_P_Torbjorn = $D_3->find('[data-category-id="0x02E0000000000006"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_33_P_Tracer = $D_3->find('[data-category-id="0x02E0000000000003"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_34_P_Pharah = $D_3->find('[data-category-id="0x02E0000000000008"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_35_P_Hanzo = $D_3->find('[data-category-id="0x02E0000000000005"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_DD_36_P_Ashe = $D_3->find('[data-category-id="0x02E0000000000200"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MQ_DD_PG = array_sum($MQ_DD_PG_Array);
$MQ_DD_WG = array_sum($MQ_DD_WG_Array);
if ($MQ_DD_WG !=0) {$MQ_DD_Winrate = round($MQ_DD_WG/$MQ_DD_PG*100,2);} else {$MQ_DD_Winrate = "0";}

$MQ_H_WG_Array = [
    $MQ_Healer_1 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ана)')->next()->text(),
    $MQ_Healer_2 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Ангел)')->next()->text(),
    $MQ_Healer_3 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Батист)')->next()->text(),
    $MQ_Healer_4 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Бригитта)')->next()->text(),
    $MQ_Healer_5 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Дзеньятта)')->next()->text(),
    $MQ_Healer_6 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Лусио)')->next()->text(),
    $MQ_Healer_7 = $D_3->find('[data-category-id="0x0860000000000039"]:eq(1)')->find('.ProgressBar-title:contains(Мойра)')->next()->text(),
];
$MQ_H_PG_Array = [
    $MQ_H_1_P_Ana = $D_3->find('[data-category-id="0x02E000000000013B"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_2_P_Mercy = $D_3->find('[data-category-id="0x02E0000000000004"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_3_P_Baptiste = $D_3->find('[data-category-id="0x02E0000000000221"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_4_P_MQigitte = $D_3->find('[data-category-id="0x02E0000000000195"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_5_P_Zenyatta = $D_3->find('[data-category-id="0x02E0000000000020"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_6_P_Lucio = $D_3->find('[data-category-id="0x02E0000000000079"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
    $MQ_H_7_P_MQira = $D_3->find('[data-category-id="0x02E00000000001A2"]:eq(1)')->find('[data-stat-id="0x0860000000000038"]')->find('.DataTable-tableColumn:eq(1)')->text(),
];
$MQ_H_PG = array_sum($MQ_H_PG_Array);
$MQ_H_WG = array_sum($MQ_H_WG_Array);
if ($MQ_H_WG != 0) {$MQ_Healer_Winrate = round($MQ_H_WG/$MQ_H_PG*100,2);} else {$MQ_Healer_Winrate = "0";}

$MQ_RL = $D_3->find('.EndorsementIcon:eq(0)')-> attr('style');
$MQ_RN = $D_3->find('.EndorsementIcon-tooltip:eq(0)')->find('.u-center');
$MQ_SVG_1 = $D_3->find('[data-js="endorsement-border"]:eq(0)')->attr('data-value');
$MQ_SVG_2 = $D_3->find('[data-js="endorsement-border"]:eq(1)')->attr('data-value');
$MQ_SVG_3 = $D_3->find('[data-js="endorsement-border"]:eq(2)')->attr('data-value');
$MQ_CA = $MQ_GW/($MQ_GP-$MQ_GT)*100;
$MQ_WR = round($MQ_CA,2);
$MQ_DH_1 = $MQ_SVG_1*100-1;
$MQ_DH_2 = $MQ_SVG_2*100-1;
$MQ_DH_3 = $MQ_SVG_3*100-1;
$MQ_DG_2 = $MQ_SVG_1*360;
$MQ_DG_3 = (1-$MQ_SVG_3)*360;
$MQ_EN = "<div class=\"endorsement-level\"><div class=\"EndorsementIcon\" style=\"".$MQ_RL."\"><div class=\"EndorsementIcon-inner\"><svg class=\"EndorsementIcon-background\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--shotcaller\" data-js=\"endorsement-border\" data-value=\"".$MQ_SVG_1."\" style=\"stroke-dasharray: ".$MQ_DH_1."px, 100px; transform: rotate(0deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--teammate\" data-js=\"endorsement-border\" data-value=\"".$MQ_SVG_2."\" style=\"stroke-dasharray: ".$MQ_DH_2."px, 100px; transform: rotate(".$MQ_DG_2."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg><svg class=\"EndorsementIcon-border EndorsementIcon-border--sportsmanship\" data-js=\"endorsement-border\" data-value=\"".$MQ_SVG_3."\" style=\"stroke-dasharray: ".$MQ_DH_3."px, 100px; transform: rotate(".$MQ_DG_3."deg);\" viewBox=\"0 0 36 36\"><circle cx=\"50%\" cy=\"50%\" r=\"15.9155\"></circle></svg></div></div><div class=\"u-center\">".$MQ_RN."</div></div>";