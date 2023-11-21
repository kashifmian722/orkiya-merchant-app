@extends('layouts.auth')



@section('style')

<style type="text/css">
	/* Color of the links BEFORE scroll */
.navbar-scroll .nav-link,
.navbar-scroll .navbar-toggler-icon {
  color: #fff;
}

/* Color of the links AFTER scroll */
.navbar-scrolled .nav-link,
.navbar-scrolled .navbar-toggler-icon {
  color: #4f4f4f;
}

/* Color of the navbar AFTER scroll */
.navbar-scrolled {
  background-color: #fff;
}

/* An optional height of the navbar AFTER scroll */
.navbar.navbar-scroll.navbar-scrolled {
  padding-top: 5px;
  padding-bottom: 5px;
}
.text-dark{
	color: black;
}
</style>

@endsection

@section('content')


<main class="main-content  mt-0">

	<header>
	  	<!-- Navbar -->
		<nav class="navbar navbar-light bg-light">
		  <!-- Container wrapper -->
		  	<div class="container">
		    
			    <!-- Navbar brand -->
			    <a class="navbar-brand mt-2 mt-lg-0" href="#">
			      <img
			        src="{{ asset('assets/img/merchant_logo.png') }}"
			        height="50"
			        alt="MDB Logo"
			        loading="lazy"
			      />
			    </a>

			    <!-- Right elements -->
			    <div class="d-flex align-items-center">
			      <!-- Icon -->
			      <a class="text-reset me-3" href="{{ url('signup') }}">
			        <button class="btn bg-gradient-dark">Become a Merchant</button>
			      </a>
			      
			    </div>
			    <!-- Right elements -->
		  	</div>
		  	<!-- Container wrapper -->
		</nav>
		<!-- Navbar -->

	 	 <!-- Jumbotron -->
	  	<div class="p-5 text-center container">
	    	<h1 class="mb-3 text-dark">Terms and conditions for brand/merchant</h1>
		    <p class="mb-3">
		    	Terms and Conditions applicable to brand/merchant using Sodagar.choomntr.com Platform.
				These terms and conditions are the contract between you and ChooMNTR Platform ("us", "we", etc). By joining ChooMNTR Platform as a brand/merchant or using Our Website, you agree to be bound by them.
				ChooMNTR and Sodagar Platform is a trade name of Tekmindlabs, whose Registered office is . . . 
			</p>
	  	</div>
	  	<!-- Jumbotron -->
	</header>

	<div class="container text-dark">
		<h3>About ChooMNTR Platform</h3>
		<p>
			ChooMNTR Platform is a marketplace that allows users to sell and buy products. 
			Any guidance we provide as part of our Services, such as pricing, Delivery, shipping, listing, and sourcing is solely informational and you may decide to follow it or not. Also, while we may help facilitate the resolution of disputes, ChooMNTR Platform has no control over and does not guarantee: the existence, quality, safety or legality of items advertised; the truth or accuracy of users' content or listings; the ability of brand/merchant to /Promote/ sell items; the ability of buyers to pay for items; or that a buyer or brand/merchant will actually complete a transaction or return/exchange an item.

		</p>
		<h3>1. Definitions</h3>
		<table>
			<tr>
				<td>Content</td>
				<td>
					means the textual, visual or audio content that is encountered as part of your experience on Our Website. It may include, among other things: text, images, sounds, videos and animations. It includes content such as advertising material, and all other product or service related material Posted by you.
				</td>
			</tr>
			<tr>
				<td>Our Website</td>
				<td>
					means any website of ChooMNTR Platform, and includes all web pages controlled by us.
				</td>
			</tr>
			<tr>
				<td>Post</td>
				<td>
					means place on or into Our Website any Content or material of any sort by any means.
				</td>
			</tr>
			<tr>
				<td>Product</td>
				<td>
					means any item offered for sale by you on Our Website, whether physical goods or downloads.
				</td>
			</tr>
			<tr>
				<td>Service</td>
				<td>
					means all of the services available from Our Website, whether free or charged.
				</td>
			</tr>
		</table>
		<h3>2. Our contract</h3>
		<ul>
			<li>
				The relationship between us is solely that:
				<ul>
					<li>
						in consideration of a fee charged by us, we provide for you an Internet market place as an arm's length contractor.
					</li>
					<li>
						we act as software service provider and provide you virtual place to showcase and sell your products.
					</li>
					<li>
						we are not partners or joint venturers.
					</li>
				</ul>
			</li>
			<li>
				If you place a Product for sale on Our Website, you do so subject to these terms.
			</li>
			<li>
				When you place a Product on Our Website, you will be bound to provide all the information required by the Competition Act 2010 and Punjab Consumer Protection Act2005.
			</li>
			<li>
				Although we are not a party to your contract with a buyer introduced to you via Our Website, we may remove your Products from offer if a customer or Our Website visitor has a valid complaint against you.
			</li>
			<li>
				We may change this agreement in any way at any time. The version applicable to your contract is the version which was Posted on Our Website at the time that the contract was made.
			</li>
			<li>
				Subject to this agreement and to the procedures set out on Our Website, you may enter a Product for promote/ sale through Our Website.
			</li>
		</ul>
		<h3>3. Your Product placement</h3>
		<p>
			You agree that you will:
			<ul>
				<li>
					not place any Product for sale which is not of merchantable quality or which requires for its setup or use a level of technical expertise which is not fully explained to a customer before purchase.
				</li>
				<li>
					not re-place any Product we remove from offer for sale.
				</li>
			</ul>
		</p>
		<h3>4. Delivery</h3>
		<ul>
			<li>
				If at any time, any customer notifies you of non-delivery within the time scale offered by you on Our Website, you must investigate within 72 hours and inform the customer that you are doing so, you need to either provide additional tracking details or offer a resolution, such as a replacement or a refund. If the buyer got their item but it’s faulty, damaged, or doesn’t match the listing description, you will need to work with them to resolve their issue according to your Shipping Policy. If they changed their mind, how you can respond (and who pays for return shipping) depends on your return policy.
			</li>
		</ul>
		<h3>5. Product returns</h3>
		<p>
			Consumers have a legal right to obtain a refund from a business for goods purchased if the goods are faulty, not fit for purpose or don't match the description. You may not include information in your listing or return policy which may mislead buyers about their rights. You must advise buyers that they may have rights under the Punjab Consumer Protection Act2005.
			If the buyer is requesting to return an item for "change of mind" (or "remorse") reasons, your return policy will apply – including which party is responsible for return postage costs. You may at your discretion accept or deny a remorse return request if it falls outside your return policy.
			You acknowledge that we may automate some aspects of the returns process, if no reply is received to a return request within 72 hours. You also acknowledge and agree that we may exercise our reasonable discretion to make a final decision on any returns where a buyer and seller cannot come to agreement.
			You agree that you will:
			<ul>
				<li>
					try you best to reply to the buyer within 72 hours to any return claims or disputes, if no response is received within 72 hours, ChooMNTR Platform will have to step in to find a solution;
				</li>
				<li>
					comply with the law relating to the contract between you and your customer, relating in particular to your obligations to provide full information and accept cancellation and returns (according to your policy). You can set your own returns and refunds policy from you brand/merchant/merchant Portal.
				</li>
				<li>
					when you have an obligation to return money to a customer for any reason, you will do so as provided by your returns & refunds policy.
				</li>
				<li>
					in the event that a Product ordered is not available, you must tell your customer and offer a replacement product or refund any money paid;
				</li>
				<li>
					comply with the ChooMNTR Platform procedures relating to satisfaction of an order.
				</li>
				<li>
					provide information to us in respect of any claim for non-delivery and any dispute as to payment, so as to enable us to identify the possibility of fraud.
				</li>
			</ul>
		</p>
		<h3>6. The selling procedure</h3>
		<p>
			<ul>
				<li>
					When setting up your shop, it is important that you set up your own terms and conditions for buyers, such as return & refund policy. You can do this from your Seller Portal, just go to your account settings and you will find your shop policy section. It's important that you clearly specify the terms and conditions of the sale in your listing so that buyers know what to expect. Please make sure to include the following details in your listing:
					<ul>
						<li>
							Return/Exchange policy
						</li>
						<li>
							Shipping method, Delivery costs, and other information
						</li>
						<li>
							Taxes and any applicable government imposed fees
						</li>
						<li>
							Terms of the transaction/Services
						</li>
						<li>
							Privacy Policy
						</li>
					</ul>
				</li>
				<li>
					ChooMNTR Platform is not responsible for the fulfillment of your contract to sell a Product.
				</li>
				<li>
					You will receive a message by email at the time of each sale, providing full information about that sale.
				</li>
				<li>
					You agree to tell us, through your brand/merchant Portal, if at any time your supply is exhausted.
				</li>
			</ul>
		</p>
		<h3>7. Goods and services tax</h3>
		<p>
			<ul>
				<li>
					Buyers and brand/merchant are generally responsible for any Goods and Services Tax (GST), sales tax, or other taxes that apply to items on Our Website. For more information about your tax obligations, please contact the Taxation Office.
				</li>
			</ul>
		</p>
		<h3>8. Disputer and breach of contract</h3>
		<p>
			<ul>
				<li>
					If in our discretion we believe that your performance as a seller results in a significant number of buyer disputes or if we believe you are in breach of this agreement, we are free to disabe your account to you until we are satisfied that disputes have been settled and / or breach rectified.

				</li>
			</ul>
		</p>
		<h3>9. Advertising your Product</h3>
		<p>
			If you accept our offer to advertise market or promote your Product, the following conditions apply.
			<ul>
				<li>
					We may use the services of a specialist Internet marketing business associated with ChooMNTR Platform.
				</li>
				<li>
					Without prior consent of the other; neither we nor you will contract with any other person or company for specialist services. Here your obligation is limited to the extent of the price charged and due to us.
				</li>
				<li>
					The price charged to you will include all payments we make to others.
				</li>
				<li>
					We give no guarantee as to the success of any advertising placed.
				</li>
				<li>
					We might post your products information including images and videos on our social media platforms.
				</li>
			</ul>
		</p>
		<h3>10. Your Product warranties</h3>
		<p>
			<ul>
				<li>
					You warrant that any Product you place on Our Website for sale:
					<ul>
						<li>
							is not: illegal, obscene, abusive, threatening, defamatory, invasive of privacy, infringing of intellectual property rights, or otherwise injurious to any third party;
						</li>
						<li>
							does not offend against the law of the country.
						</li>
					</ul>
				</li>
				<li>
					You warrant that you own the copyright of any Content you place on Our Website for sale, or that you have the permission of the copyright owner:
					<ul>
						<li>
							to enter or upload that Content;
						</li>
						<li>
							to receive the net proceeds of such sales as arise.
						</li>
					</ul>
				</li>
			</ul>
		</p>
		<h3>11. How we handle your Content</h3>
		<p>
			<ol>
				<li>
					If you post content to any public area of Our Website it becomes available in the public domain. We have no control over who sees it or what anyone does with it.
				</li>
				<li>
					You now irrevocably authorise us to publish feedback, comments and ratings about your Products, services and activity through Our Website, even though it may be defamatory or critical. If you have a problem with feedback or you think it is not true, please contact us.
				</li>
				<li>
					Posting content of any sort does not change your ownership of the copyright in it. We have no claim over it and we cannot protect your rights.
				</li>
				<li>
					You understand that you are personally responsible for your breach of someone else's intellectual property rights, defamation, or any law, which may occur as a result of any Content having been posted by you;
				</li>
				<li>
					You accept all risk and responsibility for determining whether any Content is in the public domain and not confidential.
				</li>
				<li>
					Please notify us right away of any security breach or unauthorised use of your account.
				</li>
			</ol>
		</p>
		<h3>12. Using Our Website</h3>
		<p>
			We invite you to Post Content to Our Website for [marketing your products and services and in other ways]. We have to regulate your use of Our Website to protect our business and our staff, to protect other users of Our Website and to comply with the law.
			While using Our Website, you will not:
			<ul>
				<li>
					be unlawful, or tend to incite another person to commit a crime;
				</li>
				<li>
					be obscene, offensive, threatening, violent, malicious or defamatory;
				</li>
				<li>
					infringe any laws, third party rights or our policies;
				</li>
				<li>
					be sexually explicit or pornographic;
				</li>
				<li>
					be likely to deceive any person or be used to impersonate any person, or to misrepresent your identity, age or affiliation with any person;
				</li>
				<li>
					use a Posting to solicit responses unconnected with the purpose of Our Website or the terms proposed by this agreement.
				</li>
				<li>
					Sell on Our Website if you are not able to form legally binding contracts, are under the age of 18 or are suspended from selling on Our Website;
				</li>
				<li>
					circumvent or manipulate our fee structure, the billing process, or fees owed to ChooMNTR Platform;
				</li>
				<li>
					distribute or post spam, unsolicited or bulk electronic communications, chain letters or pyramid schemes;
				</li>
				<li>
					distribute viruses or any other technologies that may harm Our Website or the interests or property of ChooMNTR Platform users;
				</li>
				<li>
					harvest or otherwise collect information about users, including email addresses, without their consent.
				</li>
				<li>
					Offer or reference your contact information or ask a buyer for their contact information in the context of buying or selling outside of ChooMNTR Platform, you may be liable to pay a commission fee applicable to that item.
				</li>
			</ul>
		</p>
		<h3>13. Your Posting: restricted content</h3>
		<p>
			In connection with the restrictions set out below, we may refuse or edit or remove a Posting which does not comply with these terms.
		</p>
		<h3>14. Security of Our Website</h3>
		<p>
			You now agree that you will not, and will not allow any other person to:
			<ul>
				<li>
					modify, copy, or cause damage or unintended effect to any portion of Our Website, or any software used within it.
				</li>
				<li>
					link to Our Website in any way that would cause the appearance or presentation of Our Website to be different from what would be seen by a user who accessed Our Website by typing the URL into a standard browser;
				</li>
				<li>
					download any part of Our Website, without our express written consent;
				</li>
				<li>
					share with a third party any login credentials to Our Website.
				</li>
			</ul>
		</p>
		<h3>15. Copyright and other intellectual property rights</h3>
		<p>
			<ul>
				<li>
					All content on Our Website, is the property of either us, our affiliates or suppliers of products for sale. It is all protected by international copyright laws.
				</li>
				<li>
					You may not copy, modify, publish, transmit, create derivative works from, or in any way exploit any of the content, except as is expressly permitted in this agreement or with our written consent.
				</li>
				<li>
					For the sake of good order you should note that copyright exists in compilations and graphic images, shapes and styles, as well as in raw text
				</li>
				<li>
					If you would like to use any of our logos or graphics, please send us an email.
				</li>
			</ul>
		</p>
		<h3>16. Interruption to the Service</h3>
		<p>
			<ul>
				<li>
					We give no warranty that the Service will be satisfactory to you.
				</li>
				<li>
					We will do all we can to maintain access to Our Website, but it may be necessary for us to suspend all or part of our Service for repairs, maintenance or other good reasons. We may do so without telling you first.
				</li>
				<li>
					You acknowledge that our Service may also be interrupted for reasons beyond our control.
				</li>
				<li>
					You agree that we are not liable to you for any loss whether foreseeable or not, arising as a result of interruption to our Service.
				</li>
			</ul>
		</p>
		<h3>17. Trading on ChooMNTR Platform and limitation of liability</h3>
		<p>
			While we try our best to maintain a safe trading environment, you accept that there are unfortunately sometimes risks when trading online and using Our Website, including dealing with fraudulent people.
			<ul>
				<li>
					You will not hold ChooMNTR Platform responsible for other users' content, actions or inactions, any business loss (including loss of profits, revenue, contracts, anticipated savings, data, goodwill or wasted expenditure) or any other indirect or consequential loss whatever.
				</li>
				<li>
					You acknowledge that Our Website is a venue to allow anyone to sell, and buy products, at any time, from anywhere, in a variety of pricing formats and locations.
				</li>
				<li>
					We have no control over the ability of buyers to pay for items or that a buyer will actually complete a transaction.
				</li>
				<li>
					You must ensure that you comply with your obligations and are aware of any laws relevant to you as a brand/merchant.
				</li>
				<li>
					You alone, and not ChooMNTR Platform, are responsible for ensuring that your listing, selling and any other activities conducted on our site are lawful. You must ensure that you comply with all applicable laws in Pakistan. You must also ensure that you strictly comply with this Contract and the policies which form part of the Contract.
				</li>
				<li>
					We do not take ownership of the items at any time and do not transfer legal ownership of items from the brand/merchant to the buyer.
				</li>
				<li>
					We cannot guarantee continuous or secure access to Our Website, and the operation may be interfered with by numerous factors outside of our control. Accordingly, to the extent legally permitted, we exclude all implied warranties, terms and conditions. We are not liable for any loss of money, goodwill or reputation, or any special, indirect or consequential damages arising, directly or indirectly, out of your use of or your inability to use Our Website or services.
				</li>
				<li>
					Our Website and Services are provided "as is". As to Our Website and Services, we make no representation or warranty of any kind, express or implied, including, without limitations, warranties:
					<ul>
						<li>
							as to fitness of Our Website and Service for a particular purpose;
						</li>
						<li>
							as to availability and accessibility, without interruption, or without error;
						</li>
						<li>
							any obligation, liability, or remedy in tort whether or not arising from our negligence.
						</li>
					</ul>
				</li>
				<li>
					You now expressly release us from any and all claims and liability known and unknown, arising in any way from a dispute between you and a buyer.
				</li>
			</ul>
		</p>
		<h3>18. Indemnity</h3>
		<p>
			You will indemnify us (and our officers, directors, agents, subsidiaries, joint venturers and employees) against any claim or demand, including legal fees and costs, made against us by any third party due to or arising out of your breach of this Contract, or your infringement of any law or the rights of a third party in the course of using Our Website.
		</p>
		<h3>19. Miscellaneous matters</h3>
		<p>
			<ul>
				<li>
					If any term or provision of this agreement is at any time held by any jurisdiction to be void, invalid or unenforceable, then it shall be treated as changed or reduced, only to the extent minimally necessary to bring it within the laws of that jurisdiction and to prevent it from being void and it shall be binding in that changed or reduced form. Subject to that, each provision shall be interpreted as severable and shall not in any way affect any other of these terms.
				</li>
				<li>
					If you are in breach of any term of this contract, we may:
					<ul>
						<li>
							terminate your account and refuse access to Our Website;
						</li>
						<li>
							remove or edit Content, or cancel any order at our discretion.
						</li>
					</ul>
				</li>
				<li>
					Any obligation in this agreement intended to continue to have effect after termination or completion shall so continue.
				</li>
				<li>
					No failure or delay by any party to exercise any right, power or remedy will operate as a waiver of it nor indicate any intention to reduce that or any other right in the future.
				</li>
				<li>
					You agree that all our electronic communications satisfy any legal requirement that such communications be in writing.
				</li>
				<li>
					In the event of a dispute between us, then, if we so ask, you undertake to attempt to settle the dispute by engaging in good faith with us in a process of mediation before commencing arbitration or litigation.
				</li>
				<li>
					So far as the law permits, and unless otherwise stated, this agreement does not give any right to any third party.
				</li>
				<li>
					We shall not be liable for any failure or delay in our performance of this agreement which is caused by circumstances beyond our reasonable control.
				</li>
				<li>
					In the event of any conflict between any term of this agreement and the provisions of the constitution of a limited company or any comparable document intended to regulate any other corporate or collective body, then the terms of this agreement shall prevail.
				</li>
			</ul>
		</p>
	</div>
</main>
<footer class="bg-light text-center text-lg-start">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright:
    <a class="text-dark" href="https://merchant.ChooMNTR.com/">ChooMNTR.com</a>
  </div>
  <!-- Copyright -->
</footer>

@endsection