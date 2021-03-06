<?php
    $menuArr = array(
        'Главная' => 'index.php', 
        'О нас' => 'aboute.php', 
        'Контакты' => 'contacts.php', 
        'Проекты' => 'projects.php', 
    );
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GISAPR</title>
    <style>
        .header {
    background-image: url(../img/header.jpg);
    background-size: cover;
}
.site-title {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 70px;
}
.site-title > h1 {
    color: #eee;
    font-size: 4rem;
    text-shadow: 0 0 5px #000;
}
.menu {
    display: flex;
    justify-content: flex-start;
    background-color: #00000080;
}
.menu-element {
    color: #fff;
    text-transform: uppercase;
    text-decoration: none;
    font-size: 2rem;
    padding: 1rem 2rem;
    margin-right: 2.5rem;
}
.menu-element:hover {
    background-color: #000000a0;
}
.content-container {
    display: flex;
    justify-content: flex-start;
}
.v-menu{
    font-size: 2rem;    
}
.sidebar {
    width: 20%;
    padding: 5em;
}
.sidebar > h2 {
    margin-bottom: 1em;
    color: #646886;
}
.sidebar > ul {
    font-size: 1.5em;
    padding-left: 1rem;    
}
.content-page{        
    
    font-size: 1.4rem;    
    background-color: #eee;
    padding: 2rem 5rem 10rem 10rem;
    width: 100%; 
    display: flex;
    flex-direction: column;
    justify-content: flex-end;    
}

    </style>
</head>
<body>
<div class="header">
    <div class="site-title">
            <h1>GISAPR company</h1>
    </div>    
    <div class="menu">
            <?php
                foreach($menuArr as $key => $value)
                {                    
                    echo "<a class="."menu-element"." href=".$value.">".$key."</a></li>";        
                }
            ?> 
    </div>       
</div>
<div class="content-container">
        <div class="sidebar">
            <h2>BЫБЕРИТЕ:</h2>
            <ul>
                <?php
                foreach($menuArr as $key => $value)
                {                    
                    echo "<li><a href=".$value.">".$key."</a></li>";        
                }
                ?>    
            </ul>
        </div>  
        <div class="content-page">
            <h2>
                Проектирование в землеустройстве:
            </h2>
<p>
Осуществление деятельности относительно землеустроительного проектирование регулируют следующие основные нормативно-правовые акты:
Земельный кодекс Украины -  документ № 2768-III 25.10.2001 г; Закон Украины  о землеустройстве документ № 858-IV от 22.05.2003 г. Согласно законодательству производятся следующие виды землеустроительной документации:
<br>•	На общегосударственном и региональном уровнях

<br>-  Техническая документация по землеустройству относительно определения и установления в натуре (на местности) государственной границы Украины;
<br>-  Схемы землеустройства и технико-экономические обоснования использования и охраны земель административно-территориальных единиц;
<br>-  Проекты землеустройства относительно установления (изменения) границ административно-территориальных образований;
<br>- Проекты землеустройства по организации и установлению границ территорий природно-заповедного фонда и другого природоохранного назначения, оздоровительного, рекреационного, историко-культурного, лесохозяйственного назначения, земель водного фонда и водоохранных зон, ограничений в использовании земель и их режимоутворюючих объектов;
<br>•	На местном уровне: 
<br>- Проекты землеустройства по приватизации земель государственных и коммунальных сельскохозяйственных предприятий, учреждений и организаций;
<br>- Проекты землеустройства по организации территории земельных долей (паев);
<br>- Проекты землеустройства по отводу земельных участков;
<br>- Проекты землеустройства по упорядочению территории для градостроительных нужд;
<br>- Проекты землеустройства, обеспечивающие эколого-экономическое обоснование севооборота и упорядочение угодий;
<br>- Проекты землеустройства по упорядочению территории населенных пунктов;
<br>- Рабочие проекты землеустройства;
<br>- Техническая документация по землеустройству относительно установления (восстановления) границ земельного участка в натуре (на местности);
<br>- Техническая документация по землеустройству относительно установления границ части земельного участка, на которую распространяется право субаренды, сервитута;
<br>- Техническая документация по землеустройству относительно раздела и объединения земельных участков;
<br>- Техническая документация по землеустройству относительно инвентаризации земель;
</p>
 
<h2>Градостроительное проектирование:</h2>
<h3>Разработка генеральных планов населенных пунктов</h3>
<p class = "dline">
Генеральный план населенного пункта является основным видом градостроительной документации на местном уровне, предназначенной для обоснование долгосрочной стратегии планирования и застройки территории населенного пункта.
На основании утвержденного генерального плана населенного пункта разрабатывается план земельно-хозяйственного устройства, который после его утверждения становится неотъемлемой частью генерального плана.
<br>В составе генерального плана населенного пункта может разрабатываться план зонирования территории этого населенного пункта. План зонирования территории может разрабатываться и как отдельная градостроительная документация после утверждения генерального плана
<br>Генеральный план населенного пункта разрабатывается и утверждается в интересах территориальной громады, обладающими учетом государственных, общественных и частных интересов.
<br>Срок действия генерального плана населенного пункта не ограничивается. Изменения в генеральный план населенного пункта могут вноситься не чаще одного раза в пять лет
<br>Разработка детальных планов территорий
</p>
<h3>Детальный план территории (ДПТ)</h3>
<p class = "dline">
 разрабатывается с целью определения планировочной организации и функционального назначения, пространственной композиции и параметров застройки и ландшафтной организации квартала, микрорайона, другой части территории населенного пункта, предназначенных для комплексной застройки или реконструкции, и подлежит стратегической экологической оценке.
 <br>Детальный план территории определяет:
 <br>1.	принципы планировочно-пространственной организации застройки;
 <br>2.	красные линии и линии регулирования застройки;
 <br>3.	функциональное назначение, режим и параметры застройки одного или нескольких земельных участков, распределение территорий согласно строительным нормам, государственным стандартам и правилам;
 <br>4.	градостроительные условия и ограничения (в случае отсутствия плана зонирование территории) или уточнения градостроительных условий и ограничений согласно плану зонирования территории;
 <br>5.	потребность в предприятиях и организациях по обслуживанию населения, место их расположения;
 <br>6.	целесообразность, объемы, последовательность реконструкции застройки;
 <br>7.	очередность и объемы инженерной подготовки территории;
 <br>8.	систему инженерных сетей;
 <br>9.	порядок организации транспортного и пешеходного движения;
 <br>10.	порядок комплексного благоустройства и озеленения потребность в формировании экосети;
 <br>11.	границы прибрежных защитных полос и пляжных зон водных объектов (в случае отсутствия плана зонирования территории).
 <br>
Детальный план территории состоит из текстовых материалов и обоснований, а также из графических приложений. Графические приложения к ДПТ состоят в масштабе 1: 500 - 1: 2000.
<br>Утвержденный детальный план является основой определения исходных данных для:
<br>- разработки проектов застройки территорий микрорайонов, кварталов, комплексов застройки отдельных земельных участков;
<br>- проектирование домов, общественных зданий, гостиничных и рекреационных комплексов, сооружений другого назначения;
<br>- проектирования сетей и сооружений инженерно-транспортной инфраструктуры и инженерного обеспечения территории;
<br>- проведения градостроительных расчетов в случае инвестиционных намерений по изменению допустимого вида использования недвижимости;
<br>- разработки проектов земельных отводов отдельных земельных участков.
<br>
На основании и с учетом положений утвержденного детального плана территории может разрабатываться проект землеустройства по упорядочению этой территории для градостроительных нужд, который после его утверждения становится неотъемлемой частью детального плана территории.
<br>Детальный план территории в пределах населенного пункта рассматривается и утверждается исполнительным органом сельского, поселкового, городского совета в течение 30 дней со дня его подачи, а при отсутствии утвержденного в установленном настоящим Законом порядке плана зонирования территории - соответствующим сельским, поселковым, городским советом.
<br>Детальный план территории за пределами населенного пункта рассматривается и утверждается соответствующей районной государственной администрацией в течение 30 дней со дня его представления.
<br>Детальный план территории не подлежит экспертизе.
</p>
</div>  
</div>
</body>
</html>
