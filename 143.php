<?php

if ($spell_checked == "143") {
    unset($arCacheData["143"]);
    $total_return = "Please select any one category";

    $options_list[] = "LOVE CALCULATOR";
    $list[] = array("content" => "__143__love__");
    $options_list[] = "FLAMES TEST";
    $list[] = array("content" => "__143__flames__");
    $options_list[] = "LUCK TEST";
    $list[] = array("content" => "__143__lucky__");

    if ($total_return) {
        $to_logserver['source'] = '143';
        include 'allmanip.php';
        putOutput($total_return);
        exit();
    }
} elseif (preg_match("~__143__(.+)__~", $req, $match)) {
    $matched = trim($match[1]);

    $hit_time = date("Y-m-d H:i:s");
    $expiry_time = date("Y-m-d H:i:s", strtotime($hit_time . " +1 day"));

    $arCacheData["143"]["expiry"] = $expiry_time; // expiry time
    $arCacheData["143"]["no"] = $number; // mobile number
    $arCacheData["143"]["count"] = 0;


    switch ($matched) {
        case 'love':
            $total_return = "Enter your name";
            $arCacheData["143"]["c"] = 'love';
            $arCacheData["143"]["name"] = 0;
            break;
        case 'flames':
            $total_return = "Enter your name";
            $arCacheData["143"]["c"] = 'flames';
            $arCacheData["143"]["name"] = 0;
            break;
        case 'lucky':
            $total_return = "Enter date of birth as dd/mm/yyyy";
            $arCacheData["143"]["c"] = 'lucky';
            $arCacheData["143"]["name"] = 0;
            break;
        default :
            break;
    }
    if ($total_return) {
        $to_logserver['source'] = '143';
        include 'allmanip.php';
        putOutput($total_return);
        exit();
    }
}

if ((!empty($arCacheData["143"]) && $arCacheData["143"]["count"] == 0) && !preg_match("~\b(tv|train|define|trace|how|when|what|which|why|route|direction|movie|song|poem|weather|climate|cricket|cri|score|review|news|stock|flames?|love|job|show ?times?|gc|tc|lyrics|epl|price|expand|pnr|dict|recipe|horoscope|photos?|party|city|greetings?|ind|alcohol|iquit)\b~i", $req)) {
    $code = $arCacheData["143"]["c"];
    echo $code;
    echo "<br>Neme:" . $arCacheData["143"]["name"];
    $hit_time = date("Y-m-d H:i:s");
    $expiry_time = date("Y-m-d H:i:s", strtotime($hit_time . " +1 day"));

    $arCacheData["143"]["expiry"] = $expiry_time; // expiry time
    $arCacheData["143"]["no"] = $number; // mobile number
    $arCacheData["143"]["count"]++;

    switch ($code) {
        case 'love':
            $total_return = "Enter your partners name";
            $arCacheData["143"]["name"] = "__name__love__" . $req . "__";
            break;
        case 'flames':
            $total_return = "Enter your partners name";
            $arCacheData["143"]["name"] = "__name__flames__" . $req . "__";
            break;
        case 'lucky':
            if (preg_match("~\b(([\d]{1})|([\d]{1,2})([\d]{1,2})([\d]{0,4}))\b~", $spell_checked, $match)) {
                $lucky_no = $match[0];
                switch ($lucky_no) {
                    case '1':
                    case'01':
                    case'10':
                    case '19':
                    case'28':
                        $total_return = "You are smart, straight talking, funny,stubborn, hardworking, honest,Jealous on competing basis, kind hearted,angry, friendly, authorities,Famous person...always want to be and regarded as first on people position,they are often like to be independent,will never be under others, self confident people!
                            You are most likely to fall in love in the younger age, but will get marry when you mature! You are likely to have problems with people who have
                            opposite views And you are most likely to take revenge over your enemies in a long time basis. You are a spender, but you will have a good profession in the
                            future. If you are guy you will be very popular that everybody will have mental attraction and respect at you. You can go anywhere from the local shop to the heart of the parliament because you are positive and well talented in numerous issues!! But in your life you will always have some people who will work hard to bring you & your name down.This is undercover!! Coz of your smart behavior you will be hated by some people too... Your family life is very cool, you will have a very nice partner & wonderful children...
                            You are pioneer,independent & original... Your best match is 4,6,8 good match is 3,5,7 !!! 
                            ";
                        break;

                    case '2':
                    case'02':
                    case'11':
                    case '20':
                    case'29':
                        $total_return = "No matter what, you will be loved by every one coz your ruler is the moon and every one loves the Moon. Well.. 
                             You are a person who day dream a lot, you have very low-self confidence, you need back up for every move in your life, you are very much unpredictable. Means you do change according to time and circumstances, kind a selfish, have a very strong sense of musical, artistic talent, verbal communication. Your attitudes are like the Moon, comes to gloom and fade away so everybody can expect changes in you. You can be a next Mahatma Gandhi who does peace love or you can be a Hitler who wants to destroy the man kind and peace (I mean in the community and your own home). 
                             If you really have a deep thought about your own believe in God you can feel the difference which will make you stronger! Most of the time your words are a kind of would be happening true! 
                             So without any knowledge you can predict the situation. You will become poets, writers, any Artistic business people! You are not strong in love, so you will be there and here till you get marry.. 
                             If U r a girl you will be a responsible woman in the whole family. 
                             If U r a man you will involve in fights & arguments in the family or Vice-versa. Means you will sacrifice your life for the goodness sake of Your family...You are gentle , intuitive with a broad vision, a power behind the scenes, well balanced People!!! Your best match is 2 ,5 ,9 no other people can put up with you !!!  
                            ";
                        break;
                    case '3':
                    case'03':
                    case'12':
                    case '21':
                    case'30':
                        $total_return = "You are a person of hard hearted, selfish most of the times, religious, loves to climb up in your life.
                                You always tend to have lots of problems within your family in the early stages but you will put up with everything..
                                You have the strong word power, pretty happy face.. So wherever you go always you have got what you wanted!!!
                                And from the birth always wanted to work hard in order to achieve something.. You will not get anything without hard work! 
                                When you reach a man/ woman age you want other younger once to listen to you because you want younger people to respect people older than them.
                                You do set so many examples to others. Generally you are not a cool person. It's not easy thing dealing with you. 
                                A tough player you are! But once you like someone's attitude then here you go, what can I say? It will be a lasting friendship.
                                You always have respect from others. Your life seems to have lots of worries and problems but sure they won't be long.. you will always have brilliant kids!!!
                                You love the money a bit too much so temptation will push you to endless trying and trying..
                                If you are a guy then it's over. Looking after your family and help friends, so you will spend a life time just being generous and kind (except 21st born men).
                                And number 3s you will be such an example of how to be in the culture & life!!! If you are girl then you have good character and culture & hardworking attitude.
                                You always follow. You are a freedom lover, creative, ambition focused, a person who brings beauty, hope & joy to this world!!! 
                                Your best match 6 ,9. Good match 1 ,3 ,5 !!! !!! 
                            ";
                        break;
                    case '4':
                    case'04':
                    case'13':
                    case '22':
                    case'31':
                        $total_return = "You are very popular within the community, you can get things done by just chatting..to even enemies!
                                You have a pretty good business mind, you are often have no-idea what is today is like, or tomorrow is like, you are a person who does anything when your head thinks lets do this.
                                You will be famous if you open up a business, get involve in share dealings, music etc..
                                Very popular with sense of humor ,you are the one your friends and families will always ask for help, and you are the one actually get money on credit and help your friends.
                                You will have more than 1 relationship, but when u get settle down you will be a bit selfish anyway.
                                Coz your other half will have a pretty good amount of control in you, be careful! You tend to go for other relationships!
                                Contacts even you are married at times 'coz your popularity..
                                You are someone who get along with anyone coz the number 5 is the middle number..
                                Changes & freedom lovers you are! You are an explorer with magic on your face. You learn your life through experience and it's your best teacher!!!
                                Your best match 1 ,2 ,9. Good match 6 ,8 !!!";
                        break;
                    case '5':
                    case'05':
                    case'14':
                    case '23':
                        $total_return = "You are very popular within the community, you can get things done by just chatting..to even enemies!
                            You have a pretty good business mind, you are often have no-idea what is today is like, or tomorrow is like, you are a person who does anything when your head thinks lets do this.
                            You will be famous if you open up a business, get involve in share dealings, music etc..
                            Very popular with sense of humor ,you are the one your friends and families will always ask for help, and you are the one actually get money on credit and help your friends.
                            You will have more than 1 relationship, but when u get settle down you will be a bit selfish anyway.
                            Coz your other half will have a pretty good amount of control in you, be careful! You tend to go for other relationships!
                            Contacts even you are married at times 'coz your popularity..
                            You are someone who get along with anyone coz the number 5 is the middle number..
                            Changes & freedom lovers you are! You are an explorer with magic on your face. You learn your life through experience and it's your best teacher!!!
                            Your best match 1 ,2 ,9. Good match 6 ,8 !!! 
                            ";
                        break;
                    case '6':
                    case'06':
                    case'15':
                    case '24':
                        $total_return = "Ooopppss..you are born to enjoy.. You don't care about others.
                            I mean you are always want to enjoy your life time, you are a person.. You will be very good in either education or work wise or business management!
                            You are talented, kind (but with only people who you think are nice), very beautiful girls and guys, popular and more than lucky with anything in your lives.
                            All the goodness does come with you. Your mind and body is just made perfect for love. You are lovable by any other numbers.
                            But if you are a number 6 man, you will experience kind of looks from most girls and will involve in more than few relationships until you get married.
                            If you are girl, most of you will get marry/engaged early. You are a caring person towards your family & friends .
                            If you miss the half-way mark then you are about to suffer physically and mentally.
                            Generally you will lead a very good inner-home happiness with nothing short of. 
                            You are a person of compassion, comfort & fairness, domestic responsibility, good judgment, and after all you can heal this world wounds to make peace for every life coz you have the great power of caring talent to make this world of love one step further...
                            Your best match 1, 6, 9. Good match 4, 5 !!! 
                            ";
                        break;
                    case '7':
                    case'07':
                    case'16':
                    case '25':
                        $total_return = "You have got the attraction to anyone out there, you are realistic, very confident, happy, such a talented individual with your education, music, arts, singing, and most importantly acting too.
                            You have real problems with bad temper! If you are a girl, you are popular with the subjects listed above.
                            You give up things for your parents. I mean you value your family status a lot, you will be in the top rank when you reach a certain age.
                            If you are a guy you are popular with girls, you are a very talented too. Most of the number 7s face lots of problems with their marriage life.
                            Only a very few are happy. You have everything in your life, but still always number 7s have some sort of unfullfilness, such worries all their lifetime.
                            It's probably the Lord given you all sort of over the standard humans talents and you are about to suffer in family life.
                            So you need to get ready looking for a partner rather than waiting. If you don't, then you might end-up single.
                            So take care with this issue, ok? You are wonderful, friendly, artistic, happy person.. You are born to contribute lots to this world!!!
                            Your best match is 2. Good matches are 1,4 !!! 
                            ";
                        break;
                    case '8':
                    case'08':
                    case'17':
                    case '26':
                        $total_return = "You are a very strong personality, there's no one out there will understand you.
                            You are very good at pointing your finger at some thing and say this is what.
                            You are more likely to suffer from the early ages.
                            I mean poverty. If your times are not good you might lose either of your parent and end up looking after your entire family.
                            You often suffer all the way in life. The problems will not allow you to study further, but you will learn the life in a very practical way.
                            You are the one who will fight for justice and may die in the war too.
                            You are normally very reserved with handful of friends and most of the time live life lonely and always prepared to help others. Well.
                            once you get married (which is often late) then your bad lucks will go away a bit and you! u become safe.
                            You will face un-expected problems such as : the error, government, poisonous animals, accidents.
                            You are some one with great discipline, persistence, courage, strength which will take you to success.
                            You are a great part of a family team. You are a fighter! Your Best match 1 ,4, 8. Good match 5 !!!
                            ";
                        break;
                    case '9':
                    case'09':
                    case'18':
                    case '27':
                        $total_return = "Hey...you guys are the incompatible people in the world.
                            You are so strong, physically and mentally... You are often have big-aims.
                            You will work hard and hard to get there. Normally you suffer in the early age from family problems and generally you will have fighting life..
                            But when you achieve what you have done, it's always a big task you have done!
                            You are so much respected in the community, you are a person who can make a challenge and successfully finish the matter off.
                            You are very naughty in your younger age, often beaten up by your parents and involve in fights and you seemed to have lots of injuries in your life time.
                            But when u grow you become calm and macho type. Love is not an easy matter for you.
                            You are good in engineering or banking jobs coz people always trust you.
                            Your family life is very good, but will have worries over your children.
                            Your such qualities are humanitarian, patient, very wise & compassionate.
                            You are born to achieve targets and serve every one all equally without any prejudice.
                            You are totally a role model to anybody in the world for a great inspiration.
                            ";

                        break;

                    default:
                        break;
                }
                unset($arCacheData["143"]);
            }

            break;

        default :
            break;
    }
    if ($total_return) {
        $source_machine = $machine_id;
        $current_file = "/temp/$numbers";
        file_put_contents(DATA_PATH . $current_file, $total_return);
        $to_logserver['source'] = '143';
        include 'allmanip.php';
        putOutput($total_return);
        exit();
    }
}
if ((!empty($arCacheData["143"]["name"]) && $arCacheData["143"]["count"] == 1) && !preg_match("~\b(tv|train|define|trace|how|when|what|which|why|route|direction|movie|song|poem|weather|climate|cricket|cri|score|review|news|stock|flames?|love|job|show ?times?|gc|tc|lyrics|epl|price|expand|pnr|dict|recipe|horoscope|photos?|party|city|greetings?|ind|alcohol|iquit)\b~i", $req)) {

    $hit_time = date("Y-m-d H:i:s");
    $expiry_time = date("Y-m-d H:i:s", strtotime($hit_time . " +1 day"));

    $arCacheData["143"]["expiry"] = $expiry_time; // expiry time
    $arCacheData["143"]["no"] = $number; // mobile number

    var_dump($arCacheData["143"]);
    $namematch = $arCacheData["143"]["name"];
    $name2 = trim($req);

    if (preg_match("~__name__(.+)__(.+)__~", $namematch, $match)) {
        $category = $match[1];
        $name1 = $match[2];

        switch ($category) {
            case 'love':
                include ("lovecalc.inc.php"); // Class
                $my_love = new lovecalc($name1, $name2); // New instance
                $val = $my_love->lovestat;

                $islove = TRUE;

                if ($islove) {
                    $love_result = "Your love percentage is " . $val . '.' . "\n"; // Show
                    if ($val > 90) {
                        $love_result .= "Perfect Match.";
                    } else if ($val > 79 && $val <= 89) {
                        $love_result .= "Excellent Match.";
                    } else if ($val > 69 && $val <= 79) {
                        $love_result .= "Very good Match.";
                    } else if ($val > 59 && $val <= 69) {
                        $love_result .= "Good Match.";
                    } else if ($val > 49 && $val <= 59) {
                        $love_result .= "Average Match.";
                    } else if ($val > 24 && $val <= 49) {
                        $love_result .= "Not a bad Match.";
                    } else if ($val <= 24) {
                        $love_result .= "Poor match.";
                    }
                }
                $total_return = $love_result;
                break;

            case 'flames':
                $name11 = preg_split('//', $name1, -1, PREG_SPLIT_NO_EMPTY);
                $name22 = preg_split('//', $name2, -1, PREG_SPLIT_NO_EMPTY);
                $s = 0;
                $count1 = strlen($name1);
                $count2 = strlen($name2);
                for ($x = 0; $x < $count1; $x++) {
                    $m = $name11[$x];
                    for ($y = 0; $y < $count2; $y++) {
                        if ($m == $name22[$y]) {
                            unset($name11[$x]);
                            unset($name22[$y]);
                            $s = $s + 2;
                            break;
                        }
                    }
                }
                $tp = $count1 + $count2;
                $t = $tp - $s;
                if ($t == 2 || $t == 4 || $t == 7 || $t == 9) {
                    $flames_result = $name1 . " is ENEMY to " . $name2 . ".";
                    $val = 1;
                } else if ($t == 3 || $t == 5 || $t == 14) {
                    $flames_result = $name1 . " is FRIEND to " . $name2 . ".";
                    $val = 2;
                } else if ($t == 6 || $t == 11 || $t == 15) {
                    $flames_result = $name1 . " is going to MARRY " . $name2 . ".";
                    $val = 3;
                } else if ($t == 10) {
                    $flames_result = $name1 . " is in LOVE with " . $name2 . ".";
                    $val = 4;
                } else if ($t == 8) {
                    $flames_result = $name1 . " has more AFFECTION on " . $name2 . ".";
                    $val = 5;
                } else {
                    $flames_result = $name1 . " and " . $name2 . " are sweetheart.";
                    $val = 6;
                }

                $total_return = $flames_result;
                break;
        }
    }

    unset($arCacheData["143"]);
    if ($total_return) {
        $to_logserver['source'] = '143';
        include 'allmanip.php';
        putOutput($total_return);
        exit();
    }
}
?>
