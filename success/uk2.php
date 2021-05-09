<?php
header("Content-Type: text/html; charset=utf-8"); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,minimum-scale=1,user-scalable=no" />
    <title>Success</title>
    <link rel="stylesheet" href="success_files/css/style.css">
    <!-- Global site tag (gtag.js) - Google Ads: 629338444 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-629338444"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-629338444');
</script>
<!-- Event snippet for Лид conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-629338444/mLroCJaB1IsCEMzii6wC'});
</script>
</head>

<body>



    <div id="blockMain">
        <div class="succ">
            <div class="success">

                <h1 class="title">You have registered successfully!</h1>

                <p class="description" style="font-weight: bold; font-size:20px; ">Your personal account manager <span class="yellow">will contact you shortly.
</span></p>
                <p class="description">You will be redirected to the platform in</p>
                <div class="time">
                    <p id="timer"></p>
                    <span id="sec"></span>
                    <?php
                    $finalLink = $_GET['auto_link'];
                    if (isset($_GET['hash'])) {
                        $finalLink = $finalLink . "&hash=" . $_GET['hash'];
                    }
                    ?>
                </div>
                <a href="<?php echo $finalLink; ?>" type="submit" class="submit">START NOW</a>
            </div>
        </div>
        <div class="ask">
            <h1 class="askTitle">Frequently asked question:</h1>
            <div class="questions">
                <ul class="questions1">
                    <li class="question">
                        <h4 class="questTitle">What results can I expect?</h4>
                        <p class="questionDescription">Bitcoin UP members usually get a minimum profit of €1,100 per day.</p>
                        <button disabled class="num">1</button>
                    </li>
                    <li class="question">
                        <h4 class="questTitle">How many hours a day should I work?</h4>
                        <p class="questionDescription">Our members work for an average of 20 minutes a day or less. Since it's the software that conducts transactions, the required "working" time is minimal.</p>
                        <button disabled class="num">2</button>
                    </li>
                    <li class="question">
                        <h4 class="questTitle">How much can I earn?</h4>
                        <p class="questionDescription">In the Bitcoin UP, your profits are unlimited. Some members make their first million in just 61 days.</p>
                        <button disabled class="num">3</button>
                    </li>
                </ul>
                <ul class="questions2">
                    <li class="question">
                        <h4 class="questTitle">What is the cost of the software?</h4>
                        <p class="questionDescription">Bitcoin UP members install a copy of our software for free. To become a member, click Start Now.
</p>
                        <button disabled class="num">4</button>
                    </li>
                    <li class="question">
                        <h4 class="questTitle">Is it similar to multi-level or affiliate marketing?</h4>
                        <p class="questionDescription">It has nothing to do with multi-level marketing or affiliate marketing. The software is based on an innovative algorithm that wins bids with an accuracy of up to 99.4%.
</p>
                        <button disabled class="num">5</button>
                    </li>
                    <li class="question">
                        <h4 class="questTitle"> Are there any fees? </h4>
                        <p class="questionDescription">There are no hidden fees required by the system. There are no brokerage fees or commissions. Your money is 100% yours, and you can withdraw it at any time without delays.</p>
                        <button disabled class="num">6</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            let i = 91;
            if (i > 0) {
                document.getElementById('sec').innerHTML = "seconds";
                setInterval(() => {
                    i--;
                    document.getElementById('timer').innerHTML = i;

                    if (i == 1) {
                        window.location.href = "<?php echo $finalLink ?>";
                    }
                }, 1000);
            }
            // break;
        });
    </script>
</body>

</html>
