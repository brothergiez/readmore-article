<!DOCTYPE html>
<html>
	<head>
		<title></title>
		<script type="text/javascript" src="jquery-3.2.1.js"></script>
		<style>
			#more_text {
			  height: 60px;
			  position: relative;
			  overflow: hidden;
			  transition:all ease 0.5s !important;
			  -moz-transition:all ease 0.5s !important;
			  -webkit-transition:all ease 0.5s !important;
			  -o-transition:all ease 0.5s !important;
			}

			#more_text .btn_read_more{
				position: absolute; 
				bottom: 0; 
				left: 0;
				width: 100%; 
				text-align: center; 
				margin: 0; padding: 10px 0; 
					
				/* "transparent" only works here because == rgba(0,0,0,0) */
				background-image: linear-gradient(to bottom, transparent, white);
			}
			.btn{
				color: #FFF;
				background-color: blue;
				border: 1px solid #000;
				height: 40px;
				line-height: 40px;
				width: 300px;
				margin: 0 auto;
				cursor: pointer;
			}
			
		</style>
	</head>
	<body>
	<?php
		$data = 'Go-Jek, the motorbike on-demand startup that is battling Uber and Grab in Indonesia, has closed a new round of $1.2 billion led by Chinese internet giant Tencent, two sources close the company told TechCrunch. The deal, which we understand was signed last week, values the company at $3 billion post money. It is expected to be officially announced “soon.”

			Go-Jek declined to comment. Tencent did not respond to requests for comment.

			Go-Jek raised $550 million as recently as August 2016, when it commanded a valuation of $1.3 billion so this new deal has pushed that figure up considerably over a short period of time. The Information previously reported that Tencent was considering an investment in Go-Jek. Other investors in the round are not clear at this stage, but we believe them to be from the existing pool of backers.
			One source told TechCrunch that Alibaba and its financial services spin-out Ant Financial held talks with the startup, but were ultimately unsuccessful. Ant Financial has since partnered with media firm Emtek to enter Indonesia. Alibaba and Tencent are fierce rivals that are not known for co-investing in deals, although both hold equity in Didi Chuxing after investing separately in Didi Kuaidi and Didi Dache which ultimately merged to create Didi (and is buying Uber’s China business).
			Go-Jek claims to have over 200,000 drivers across some 25 cities in Indonesia. It started out as a pure bike taxi player — because two wheels are an efficient way to navigate the congested streets of Asian mega-cities like Jakarta — but it has since expanded into four wheels with its GoCar private car service and a partnership with taxi firm Blue Bird. In contrast, Uber and Grab have both introduced motorbike taxi services in Indonesia to crank up the competition.

			<!--PAGEBREAK--!>

			Focused on the Indonesian market only, Go-Jek is involved in a dog fight with Uber and Singapore-headquartered Grab. Uber has, of course, raised more than $8 billion from investors — at a valuation that has surpassed $60 billion — while Grab is reportedly working on a new $1.5 billion funding round. Its most recent raise was $750 million at a $3 billion valuation in September 2016, but you can expect that figure to increase in the near future. Our sources told us that Go-Jek’s new fundraising is principally focused on increasing its war chest in order to continue to battle Uber and Grab on driver and passenger subsidies, develop its mobile payment business — Go-Pay — and expand its services business, which allows customers to get services such as shopping, massages and more on demand.
			Last year, Go-Jek hinted that it would expand its business overseas, but to date it has remained in Indonesia. One source told us that Go-Jek has considered partnerships or investments to expand to markets where other bike on-demand services exist, such as India or Sri Lanka, but it is staying focused on the battle in Indonesia. Aside from being Southeast Asia’s largest economy and population — Indonesia is home to over 250 million people — the country is tipped to be Southeast Asia’s largest internet economy by some margin.
			The region’s ride-sharing market itself is predicted to grow from $2.5 billion in 2015 to $13 billion by 2025, according to a report co-authored by Google. Indonesia’s share of that segment is forecast to jump from an estimated $0.8 billion to $5.6 billion over that same period.
			Grab is making a big push to win the opportunity. The company recently pledged to invest $700 million into its Indonesia operations, which includes building out its team, localizing its tech and making investments. Grab recently snapped up Kudo Payments in an undisclosed deal which sources told us is in the region of $80 million to $100 million. The acquisition is designed to boost Grab’s own payment platform, GrabPay, which is following GoPay’s footsteps and taking Grab into services beyond just car rides.
			The new Go-Jek deal also marks Tencent’s first investment in Indonesia, and the latest in a flurry of startup deals from the company, which is best known for operating China’s top messaging platform, WeChat. Tencent bought five percent of Tesla in March for just over $2 billion, and it has since done deals with Chinese streaming service Kuaishou and cross-border payment provide Airwallex.'; 

			$text	= explode('<!--PAGEBREAK--!>',$data); 
			$count 	= count($text);
			if(!$count){
				echo $data;
			}elseif($count==2){
				$result = '<div id="visible_text">'.$text[0].'</div><div id="more_text">'.$text[1].'<div class="btn_read_more" id="btn_read_more"><a href="#" onclick="readmore();"><div class="btn">READ MORE</div></a></div></div>';
				echo $result;
			}else{
				$result = '<div id="visible_text">'.$text[0].'<div><div id="more_text">';
				for($i=1; $i<$count; $i++){
					$result .= $text[$i];
				}
				$result .= '<div class="btn_read_more" id="btn_read_more"><a href="#" onclick="readmore();"><div class="btn">READ MORE</div></a></div></div>';
				echo $result;
			}
?>

<script>
	function readmore(){
		$('.btn_read_more').hide();
		$('#more_text').css({"height": "100%", "-webkit-transition":"all ease 5s", "transition": "all ease 5s", "-moz-transition":"all ease 5s", "-o-transition":"all ease 5s"})
	}
</script>

</body>
</html>

