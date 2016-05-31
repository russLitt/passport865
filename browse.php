<?php 
require("global.include.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Browse Passport865</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="img/passport.ico" type="image/x-icon"/>
    <?php include("./head.include.php"); ?>
    <!-- Custom styles for this page -->
    <!-- <link rel="stylesheet" type="text/css" href="./css/browse.css"> -->
    <link rel="stylesheet" type="text/css" href="browse.css">

</head>
<!-- <style type="text/css"></style> -->
<body>
  <?php require("navbar.include.php"); ?>

    <!-- *************************** MAIN COVER  ********************************** -->       
    <div class="inner-cover">
	<h1 class="cover-heading">Entrepreneur's Toolbox</h1>
        <h2>Your Source for Helpful Links and Info</h2>
        <!-- *** define class for tabs *** -->
        <div class="right-tabs clearfix">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Dictionary</a></li> 
             <li><a data-toggle="tab" href="#menu2">ESO Grid</a></li>
            </ul>
            <div class="tab-content">
         <div id="home" class="tab-pane fade in active">
         <div class="row">
                <div class="col-lg-3">
                    <h3>Get Started</h3>
                    <div id="button-container">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#gen-res-modal">General Resources</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ent-blog-modal">Entrepreneur Blogs</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#soc-med-modal">Social Media & Networking</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#leg-asp-modal">Legal Aspects</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#pla-res-modal">Planning & Research</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#com-ana-modal">Competition Analysis</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3>Fund Your Idea</h3>
                    <div id="button-container">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#get-red-modal">Getting Ready</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ven-cap-modal">Venture Capital</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#bus-loa-modal">Business Loans</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ang-inv-modal">Angel Investors</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#cro-fun-modal">Crowdfunding</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#pub-mar-modal">Public Markets</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3>Run Your Business</h3>
                    <div id="button-container">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#biz-sales-modal">Business & Sales Development</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#mark-pr-modal">Marketing & PR</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#hr-modal">Human Resources</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#fin-man-modal">Financial Management</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#insur-modal">Insurance & Tax</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#rea-est-modal">Real Estate</button>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h3>News and Misc</h3>
                    <div id="button-container">
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#gen-biz-modal">General Business</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#min-wom-modal">Women, Minority & Veteran Owned</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#tec-bus-modal">Tech Business</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#sea-opt-modal">Search Optimization</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#ref-res-modal">References & Research</button>
                        <button type="button" class="btn btn-default" data-toggle="modal" data-target="#gov-non-modal">Govt & Non-Profit Resources</button>
                    </div>
                </div>
             </div>
          </div>

          <!-- ******* Dictionay Tab content ******** -->
         <div id="menu1" class="tab-pane fade">
      <h3>Dictionary of Commonly Used Business Terms</h3>
      <h5>Acquisition</h5><p class ="dictP">To take ownership of another business, typically used in conjunction with the word merger, as in mergers and acquisitions or M&As</p>
      <h5>Advertising</h5><p class ="dictP">The practice of attracting public attention to a product or business, by means of paid announcements in the print, broadcast, or electronic media. Not to be confused with the similiar marketing or public relations concepts</p>
      <h5>Angel Investors</h5><p class ="dictP">Individuals who back emerging entrepreneurial ventures, usually as a bridge to get from the self-funded stage to the level of business that would both need and attract venture capital. Funding level usually ranges anywhere from $50,000 to $2 million</p>
      <h5>Business Accelerator</h5><p class ="dictP">Accelerators are similar to incubators in that they both aim to help businesses find success and minimize failure, yet vary greatly on how they try to achieve this. Accelerators typically invest in those enrolled in their programs as well as require a shorter duration of time spent in the program</p>
      <h5>Business Incubator</h5><p class ="dictP">Incubators provide workspace, coaching, and support services to entrepreneurs and early-stage businesses. These programs essentially exist to improve the odds of a startup's success</p>
      <h5>Business Valuation</h5><p class ="dictP">An estimate of the worth of a business entity and its assets</p>
      <h5>Broker</h5><p class ="dictP">A commonly used term applied to individuals or firms that trade securities. Brokers execute trades of securities between buyers and sellers in return for a fee or commission</p>
      <h5>Copyright</h5><p class ="dictP">A form of protection for published and unpublished literary, scientific and artistic works that have been fixed in a tangible or material form</p>
      <h5>Corporation</h5><p class ="dictP">A body that is granted a charter recognizing it as a separate legal entity having its own rights, privileges, and liabilities distinct from those of its members. The primary advantage of a corporation is that shield its investors from personal liability for any losses the corporation may experience</p>
      <h5>Due Diligence</h5><p class ="dictP">The inquiry process of obtaining sufficient and accurate disclosure of all material documents and other information which may influence the outcome of the transaction</p>
      <h5>Entrepreneur</h5><p class ="dictP">A person who organizes, operates, and assumes the risk for a business venture</p>
      <h5>Entrepreneur Support Organization (ESO)</h5><p class ="dictP">Organizations that provide entrepreneurs and small businesses with a number of services, programs and resources designed to build success, such as mentorship, coaching, workshops and much more</p>
      <h5>General Partnership</h5><p class ="dictP">An organizational structure in which each general partner shares in the administration, profits and losses of the operation</p>
      <h5>Home Based Business</h5><p class ="dictP">A business whose primary office is located in the owner's home. The business can be any size or any type as long as the office itself is located within a home</p>
      <h5>Human Resources (HR)</h5><p class ="dictP">The division of a company that is focused on activities relating to employees. These activities normally include recruiting and hiring of new employees, orientation and training of current employees, employee benefits, and retention</p>
      <h5>Independent Contractor</h5><p class ="dictP">One who practices an independent trade, business, or profession in which they offer their services to the public. The person contracting for their services must have the right to control or direct only the result of the work and not the means and methods of accomplishing the result</p>
      <h5>Initial Public Offering (IPO)</h5><p class ="dictP">The offering or sale of a company's securities to the investing public for the first time (i.e., converting a company from private to public ownership)</p>
      <h5>Joint Venture</h5><p class ="dictP">A legal entity created by two or more businesses joining together to conduct a specific business enterprise with both parties sharing profits and losses. It differs from a strategic alliance in that there is a specific legal entity created</p>
      <h5>Limited Liability Company (LLC)</h5><p class ="dictP">A legal entity that is not taxable itself and distributes the profits to its owners, yet shields personal assets from business debt such as a corporation</p>
      <h5>Limited Partnership</h5><p class ="dictP">A business arrangement in which the day-to-day operations are controlled by one or more general partners and funded by limited or silent partners who are legally responsible for losses based on the amount of their investment</p>
      <h5>Line of Credit</h5><p class ="dictP">Similar to a business loan, but the borrower only pays interest on the amount actually used. Similar to a credit card, the business must make periodic payments against the outstanding balance</p>
      <h5>Marketing</h5><p class ="dictP">The process of researching, promoting, selling and distributing a product or service. Marketing covers a broad range of practices, including advertising, publicity, promotion, pricing, and overall packaging of the goods or services</p>
      <h5>Merger</h5><p class ="dictP">The joining of two previously separate corporations. A true merger, in the legal sense, occurs when both businesses dissolve and move their assets and liabilities into a newly created entity</p>
      <h5>Networking</h5><p class ="dictP">Developing business contacts to form business relationships, increase your knowledge, expand your business base, or serve the community. Also used to describe linking computers systems together</p>
      <h5>Outsourcing</h5><p class ="dictP">Purchasing standard operational services from another business. Outsourced services typically including accounting, payroll, IT, advertising, and more</p>
      <h5>Partnership</h5><p class ="dictP">A business form in which two or more individuals who carry on a continuing business for profit. A partnership is legally regarded as a group of individuals rather than as a single entity, and each of the partners file their share of the profits on their individual tax returns</p>
      <h5>Patent</h5><p class ="dictP">A property right granted to an inventor to exclude others from making, using, offering for sale, or selling the invention for a limited time in exchange for public disclosure of the invention when the patent is granted. See more information on patents from your About.com Guide to Inventors</p>
      <h5>Public Relations (PR)</h5><p class ="dictP">The deliberate promotion of a specific image for a business. Often confused with publicity which is simply the materials used in a specific part of a public relations effort</p>
      <h5>SCORE</h5><p class ="dictP">Service Corps of Retired Executives; they provide counseling advice for small businesses</p>
      <h5>Small Business Administration (SBA)</h5><p class ="dictP">The US Government Agency charged with "providing customer-oriented, full-service programs and accurate, timely information to the entrepreneurial community"</p>
      <h5>Sole Proprietorship</h5><p class ="dictP">A business owned and operated by a single person</p>
      <h5>Trademark</h5><p class ="dictP">A form of legal protection for words, names, symbols, sounds, or colors that distinguish goods and services. Trademarks, unlike patents, can be renewed forever as long as they are being used in business</p>
      <h5>Venture Capital (VC)</h5><p class ="dictP">A form of financing for a company in which the business gives up partial ownership and control of the business in exchange for capital over a limited time frame, usually 3-5 years</p>
    </div>
   </div>  
   <div id="menu2" class="tab-pane fade">
   <a href="https://infograph.venngage.com/infograph/publish/63d54054-2c62-4e3d-886a-2a12cb2345a8"></a>
  </div>
 </div>
    
    <!-- ******===================MODALS (buttons) ==================****** -->
    <!--********** Getting Started Column ************* -->
	
    <!-- General Resources Modal -->
    <div id="gen-res-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">General Entrepreneur Resources</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.inc.com/guides/2010/08/10-things-to-do-before-you-start-your-start-up.html" target="_blank">10 Things to do Before You Start Your Start-Up</a>
                    <p>Is your idea good enough to go the distance? Think you have what it takes to run a successful start-up?</p>
                </div>
                <div class="modal-body">
                    <a href="http://entrepreneurs.about.com/" target="_blank">About.com - Entrepreneurship</a>
                    <p>An excellent collection of articles, video clips and other resources for the entrepreneur just starting out</p>
                </div>
                <div class="modal-body">
                    <a href="http://knoxec.com/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Knoxville Entrepreneur Center</a>
                    <p>KEC helps entrepreneurs in Knoxville start and grow successful businesses. If you’re an entrepreneur looking for advice, guidance or assistance on how to move forward, we want to know you</p>
                </div>
                <div class="modal-body">
                    <a href="https://www.microsoft.com/BizSpark/" target="_blank">BizSpark by Microsoft</a>
                    <p>Bizspark is a program from Microsoft offering free software and support services to technology-based start-ups</p>
                </div>
                <div class="modal-body">
                    <a href="http://edwardlowe.org/" target="_blank">Edward Lowe Foundation</a>
                    <p>Fantastic entrepreneurial resources for second stage (growth-oriented businesses that have moved past start-up but not yet reached maturity) entrepreneurs</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.knoxvillechamber.com/existing-business-services" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Knoxville Chamber of Commerce - Business Resources</a>
                    <p>"Nurturing businesses already in East Tennessee is a big part of what we do and a significant portion of our region’s overall economic development efforts. The Chamber offers several no- and low-cost programs to help your business do business in East Tennessee."</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.entrepreneur.com/" target="_blank">Entrepreneur.com</a>
                    <p>The name says it all. Great collection of resources as well as start-up guides</p>
                </div>
                <div class="modal-body">
                    <a href="https://msdn.microsoft.com/en-us/library/ms995763" target="_blank">Tips on Starting a Software Company</a>
                    <p>A good read from Microsoft Developer Network for those interested in starting a software company</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Entrepreneur Blogs -->
    <div id="ent-blog-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Entrepreneur Blogs</h4>
                </div>
                <div class="modal-body">
                    <a href="http://under30ceo.com/category/blog/" target="_blank">Under 30 CEO</a>
                    <p>Blog geared towards young professionals discussing everything from entrepreneurship to finding motivation in life</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.knoxvillechamber.com/chamber-blog" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;The Chamber Blog</a>
                    <p>From the Knoxville Chamber comes a fantastic blog focusing on business topics with contributors including prominent local individuals</p>
                </div>
				<div class="modal-body">
                    <a href="http://larrycheng.com/" target="_blank">Thinking About Thinking</a>
                    <p>Super informative and interesting blog by Larry Cheng covering business, technology and everything in between</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.drjeffcornwall.com/" target="_blank">The Entrepreneurial Mind</a>
                    <p>Dr. Jeff Cornwall developed an interest in entrepreneurship beginning at a very early age and grew up helping his 
						father with his business ventures. His blog contains a wealth of information and is updated often</p>
                </div>
				<div class="modal-body">
                    <a href="http://ittybiz.com/" target="_blank">Itty Biz</a>
                    <p>Itty Biz is a blog ran by Amy Dunford and Dave Navarro offering their excellent insight to grow your small business</p>
                </div>
                <div class="modal-body">
                    <a href="http://knoxec.com/blog/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Knoxville Entrepreneur Center - Blog</a>
                    <p>KEC's blog is updated regularly with great content from their "Entrepreneur-In-Residence" Jonathan Sexton, as well excellent material from other local contributors</p>
                </div>
				<div class="modal-body">
                    <a href="http://onstartups.com/" target="_blank">On Startups</a>
                    <p>On Startups is an excellent blog for entrepreneurs written by Dharmesh Shah, co-founder of HubSpot, a popular software 
					product for inbound marketing</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Social Media & Networks -->
    <div id="soc-med-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Social Media & Networks</h4>
                </div>
                <div class="modal-body">
                    <a href="https://www.linkedin.com/" target="_blank">Linkedin</a>
                    <p>A business-oriented social networking service used primarily for professional networking. Currently reported to 
					   have over 400 million members in more than 200 countries and territories</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.eokhq.com/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Entrepreneurs of Knoxville</a>
                    <p>EOK is a diverse group of successful business owners and entrpeneurs as well as those working towards achieving their goal of becoming an entrepreneur.  EOK has monthly social meetings for members and non-members</p>
                </div>
				<div class="modal-body">
                    <a href="https://twitter.com/" target="_blank">Twitter</a>
                    <p>One of the biggest and most well known social networking services, Twitter connects users from all over the world
					   to share their thoughts and ideas about current topics through short messages called "tweets"</p>
                </div>
				<div class="modal-body">
                    <a href="https://www.quora.com/" target="_blank">Quora</a>
                    <p>Quora is a question and answer based website where questions are asked, answered, and edited by it's community of users</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </div> 

    <!-- Legal Aspects -->
    <div id="leg-asp-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Legal Aspects</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/corporations-faq-29122.html" target="_blank">Corporations FAQ</a>
                    <p>Answers to some of the most common questions and concerns when deciding to incorporate your business or not</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.bizfilings.com/">Business Filings</a>
                    <p>Information on incorporation and on-line corporation formation</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/form-llc-how-to-organize-llc-30287.html" target="_blank">How to Form an LLC</a>
                    <p>Forming an LLC is not as hard as most people think, here are the steps you must take to turn your LLC dream a legal reality</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Planning and Research -->
    <div id="pla-res-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Planning & Research</h4>
                </div>
                <div class="modal-body">
                    <a href="https://www.caycon.com/plan-options.php" target="_blank">Approaches to Writing a Business Plan</a>
                    <p>There are four primary approaches to writing a business plan and this article offers excellent information into doing just that</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.bplans.com/" target="_blank">Bplans.com</a>
                    <p>Includes business planning preparation software and business plan templates as well as tips and guides</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.kauffman.org/what-we-do/research" target="_blank">Kauffman Research</a>
                    <p>"Our research is contributing to a more in-depth understanding of what drives innovation and economic growth in an entrepreneurial world"</p>
                </div>
					<div class="modal-body">
                    <a href="http://www.gaebler.com/Writing-a-Business-Plan.htm" target="_blank">Writing a Business Plan</a>
                    <p>Writing a business plan and proper planning are some of the most important aspects of starting a business. </p>
                </div>
					<div class="modal-body">
                    <a href="http://www.businessplans.org/tabStart.html" target="_blank">Center for Business Planning</a>
                    <p>“Plan your business with these resources including guidelines, samples, directories, and hundreds of internet links
                       for every stage of your business.”</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </div>   

    <!-- Competition and Analysis -->
    <div id="com-ana-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Competition Analysis</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.knoxvillechamber.com/research" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Knoxville Chamber of Commerce- Market Research</a>
                    <p>A highly useful tool offering Knoxville-area demographic research and reports, with many reports being offered for free while others are priced very reasonably</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.bizstats.com/" target="_blank">BizStats.com</a>
                    <p>A massive amount of data across a wide range of industries including business stats, financial ratios and much more</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.corporateinformation.com/" target="_blank">Corporate Information</a>
                    <p>Delivering up to date financial information on over 35,000 publicly traded companies worldwide</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </div>

    <!-- ************ Funding Your Idea Column ************ -->
    <!-- Getting Ready -->
    <div id="get-red-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Getting Ready</h4>
                </div>
                <div class="modal-body">
                    <a href="http://hbswk.hbs.edu/item/how-can-start-ups-grow" target="_blank">How Can Startups Grow?</a>
                    <p>For new ventures a lack of resources makes growth difficult to come by - just ask those nine out of ten firms that fail</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.entrepreneur.com/article/217376" target="_blank">Self-Financing Your Startup</a>
                    <p>The best place to begin is by looking in the mirror. Self-financing is the number-one form of financing used by most business startups</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.entrepreneur.com/article/271446" target="_blank">How to Start a Business with (Almost) No Money</a>
                    <p>A lack of personal capital shouldn't keep you from pursuing your dreams, it's actually very possible to start and
					grow a business with basically no personal financial investment - if you know what you're doing</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Venture Capital -->
    <div id="ven-cap-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Venture Capital</h4>
                </div>
                <div class="modal-body">
                    <a href="http://venture-capital-firms.findthecompany.com/" target="_blank">FindTheCompany</a>
                    <p>Directory of Venture Capital Funds, ability to sort results by different categories</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.meritusventures.com/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Meritus Ventures</a>
                    <p>A venture capital fund formed to make equity investments in private, expansion-stage companies in predominantly rural areas in central and southern Appalachia</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.billsnow.com/books/venture-capital-101/" target="_blank">Venture Capital 101</a>
                    <p>Venture Capital 101 is your no nonsense guide to cutting through the clutter in the venture capital world</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.venturefocus.org/" target="_blank">VentureFocus</a>
                    <p>Search our curated database of 6000 investors by stage, region, sector and more to find the perfect match for your company</p>
                </div>
				<div class="modal-body">
                    <a href="https://vcexperts.com/" target="_blank">VC Experts</a>
                    <p>The VCExperts.com site includes current industry news, weekly commentary, and the online University and 
					   4,000 page Encyclopedia of Private Equity and Venture Capital</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Business Loans -->
    <div id="bus-loa-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Business Loans</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/lowdown-business-loans-29666.html" target="_blank">The Lowdown on Business Loans</a>
                    <p>If you're seeking a loan for your business, make sure you understand the basics</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.inc.com/resources/startup/articles/20040701/banks.html" target="_blank">Think Global, Borrow Local</a>
                    <p>For startups and small businesses sometimes the best way to go is with a local/community for a number of reasons including
					   an understanding of small business needs and adding a level of personal attention</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
 </div>

    <!-- Angel Investors -->
    <div id="ang-inv-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" target="_blank">&times;</button>
                    <h4 class="modal-title">Angel Investors</h4>
                </div>
                <div class="modal-body">
                    <a href="http://theangelcapitalgroup.com/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Angel Capital Group</a>
                    <p>Angel Capital Group is a syndicate of angel groups and funds. The network brings Angel investors and entrepreneurs together in an environment that celebrates innovation, rewards strategic risk-taking, and focuses on performance</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.smallbusinessnotes.com/business-finances/angel-investors.html" target="_blank">Angel Investors</a>
                    <p>This articles identifies who angel investors are, what to expect from them and how to best utilize them for your needs</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.inc.com/articles/1998/12/18127.html" target="_blank">Angel Financing: Dos and Dont's for Entrepreneurs</a>
                    <p>Entrepreneur Andy Sack offers his insight and personal experience to identifying the best ways of securing an angel investor</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Crowdfunding -->
    <div id="cro-fun-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Crowdfunding</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.forbes.com/sites/chancebarnett/2012/08/02/crowdfunding-101-the-basics/#359584844278" target="_blank">Crowdfunding 101: The Basics</a>
                    <p>A great little article giving an overview of the four different types of crowdfunding available</p>
                </div>
				<div class="modal-body">
                    <a href="http://smartblogs.com/social-media/2012/06/19/6-secrets-to-launching-a-successful-kickstarter-campaign/" target="_blank">6 Secrets to Starting a Successful Kickstarter Campaign</a>
                    <p>Obtaining funding this way isn't always easy, but it is doable. These are the 6 secrets of 3 film producers who figured it out</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Public Markets -->
    <div id="pub-mar-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Public Markets</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.inc.com/magazine/20010901/23351.html" target="_blank">An IPO For Everyone</a>
                    <p>According to the co-founder of investment firm Hambrecht Quist, an entirely new way 
					for companies to go public may bring the markets to the masses</p>
                </div>
				<div class="modal-body">
                    <a href="http://www.inc.com/articles/1999/11/15747.html" target="_blank">IPO Basics: Due Diligence</a>
                    <p>Due diligence is key for a smooth transition to IPO, it ensures you can back up claims about your business in your SEC registration statement</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>


    <!-- ********************  Running Your Business ******************** -->
    <!-- Biz & Sales -->
    <div id="biz-sales-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Business & Sales Development</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.eyesonsales.com/" target="_blank">Eyes on Sales</a>
                    <p>A website aimed at "Helping you Raise the Bar" on your sales technique</p>
                </div>
                  <div class="modal-body">
                    <a href="https://www.tsbdc.org/" target="_blank"><span class="glyphicon glyphicon-star-empty"> </span>&nbsp;America's Small Business Development Center - Tennessee</a>
                    <p>For over 30 years, the Tennessee Small Business Development Center (TSBDC) network has been empowering small business owners, entrepreneurs, and individuals with a business idea to innovate new products and services that compete in the global marketplace</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.wsj.com/news/articles/SB121199439394026485" target="_blank">Three Strategies To Get Customers To Say 'Yes'</a>
                    <p>Wall Street Journal Online provides a great article detailing how what small businesses lack in resources, they make up for in flexibility</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.captureplanning.com/!hc_business_development.cfm?" target="_blank">Business Development & Marketing</a>
                    <p>This site provides articles that will give you insight to successful business and marketing practices. Learn how to attract and maintain a solid consumer base. Learn various sales techniques or review familiar ones to stay fresh and ready for that new client</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nytimes.com/2010/10/21/business/smallbusiness/21sbiz.html?_r=0" target="_blank">Get Your Product onto Retail Shevles</a>
                    <p>Business owners with a product to sell often dream of winning shelf space in the Wal-Marts and Targets of the world. But these days, with the recovery dragging, it is a challenge to get shelf space in any store</p>
                </div>
                <div class="modal-body">
                    <a href="https://leadgenius.com" target="_blank">LeadGenius</a>
                    <p>LeadGenius gets you the data you need to keep your business growing. With verified leads and data-driven insights, your team can close deals the smarter, faster way</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Marketing and PR -->
    <div id="mark-pr-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Marketing & Public Relations</h4>
                </div>
                <div class="modal-body">
                    <a href="https://customer.io" target="_blank">Customers.io</a>
                    <p>Customer.io enables you send targeted human messages to your customers, by utilizing their unique 
                    interactions with your business</p>
                </div>
                <div class="modal-body">
                    <a href="http://mailchimp.com" target="_blank">MailChimp</a>
                    <p>MailChimp is a powerful, easy to use email marketing service. MailChimp helps you design email newsletters, share them on social networks, integrate with services you already use, and track your results</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/avoid-unlawful-advertising-seven-rules-29801.html" target="_blank">Avoid Unlawful Advertising: Seven Rules for Your Business</a>
                    <p>Be sure you comply with laws against deceptive or misleading advertising. Required reading before you do any type of advertising</p>
                </div>
                <div class="modal-body">
                    <a href="http://academy.hubspot.com/" target="_blank">Hubspot's Inbound Marketing University</a>
                    <p>New from Hubspot! (Inbound Sales Certification Course) IMU offers an online curriculum of 18 Internet marketing webinars taught by a faculty of top marketing experts</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.slideshare.net/Onboardly/the-ultimate-guide-to-startup-marketing" target="_blank">The Ultimate Guide to Inbound Marketing</a>
                    <p>Tactics for attracting initial customers, primarily through content marketing and public relations</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.emergingtechpr.com/" target="_blank">EmergingTechPR.com</a>
                    <p>A site dedicated to providing useful, easy-to-understand information on public relations for emerging tech companies</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.prweb.com/" target="_blank">PR Web</a>
                    <p>An affordable online press release distribution tool</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Human Resources -->
    <div id="hr-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Human Resources</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.allbusiness.com/hiring-fast-vs-hiring-right-1065-1.html" target="_blank">Hiring Fast vs. Hiring Right</a>
                    <p>Sometimes companies can grow quickly, how important is it to hire the right employee versus hiring an employee right now?</p>
                </div>
                <div class="modal-body">
                    <a href="https://www.entrepreneur.com/article/83774" target="_blank">Hiring Your First Employee</a>
                    <p>Looking to bring your first employee on board? We'll help you understand the legal requirements of hiring staff so you don't hit any rough waters down the line</p>
                </div>
                 <div class="modal-body">
                    <a href="http://www.hr-outsourcing.org/" target="_blank">The HR Outsourcsing Toolkit</a>
                    <p>The HR Outsourcing Toolkit is designed to help you manage and address the demands of an outsource project as efficiently and professionally as possible</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.hrmguide.net/" target="_blank">Human Resources Management(HRM) Guide</a>
                    <p> Managing people, human capital and culture - Human Resource Management (HRM) is critical for business success. HRM Guide publishes articles and news releases about HR surveys, employment law, human resource research</p>
                </div>
                <div class="modal-body">
                    <a href="hhttp://www.nytimes.com/allbusiness/AB11480372_primary.html" target="_blank">When Can You Legally Fire Employees?</a>
                    <p>So when can you legally fire an employee? Employment lawsuits can be nasty and expensive, and they can generate negative publicity for your company. Here is a list of some reasons that should generally stand up</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Financial Management -->
    <div id="fin-man-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Financial Management</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.businesszone.co.uk/deep-dive/growth/eight-cashflow-secrets-of-entrepreneurs" target="_blank">Eight Cashflow Secrets of Entrepreneurs</a>
                    <p>According to entrepreneurial guru Ty Freyvogel, your ability to manage your cash flow will either make you or break you</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/bookkeeping-accounting-basics-29653.html" target="_blank">Bookkeeping and Accounting Basics</a>
                    <p>Many new business owners are daunted by the mere idea of bookkeeping and accounting. But in reality, both are pretty simple</p>
                </div>  
                <div class="modal-body">
                    <a href="https://msdn.microsoft.com/en-us/library/ms953809.aspx" target="_blank">Finance for Geeks</a>
                    <p>Eric Sink provides a geek-oriented overview of accounting and company funding in a great article on Microsoft Developer Network</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/accounting-terms-every-businessperson-should-29842.html" target="_blank">Accounting Terms Every Business Person Should Know</a>
                    <p>An invaluable glossary of accounting terms will get you up to speed if you're new to business</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.inc.com/guides/start_biz/20675.html" target="_blank">Cash Management Basics</a>
                    <p>Cash is your business's lifeblood. Managed well, your company remains healthy and strong. Managed poorly, your company goes into cardiac arrest</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Insurance & Tax -->
    <div id="insur-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Insurance & Tax</h4>
                </div>
                <div class="modal-body">
                    <a href="https://en.wikipedia.org/wiki/Insurance" target="_blank">Insurance</a>
                    <p>Learn about the big picture as well as some of the finer points of insurance through this article</p>
                </div>
                <div class="modal-body">
                    <a href="http://businessinsure.about.com/od/insuringyourbusiness/tp/listtypesins.htm" target="_blank">Types of Business Insurance</a>
                    <p>Business insurance is a broad description that can be broken down into a list of nine types of insurance policies</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/home-business-insurance-29943.html" target="_blank">Home Business Insurance</a>
                    <p>If you operate a business from your home, it's important that you obtain adequate insurance coverage for your business equipment and transactions, just as if you had a separate office</p>
                </div>
                <div class="modal-body">
                    <a href="https://www.entrepreneur.com/article/241026" target="_blank">7 Types of Insurance You Need to Protect Your Business</a>
                    <p>Businesses have access to a wide range of insurance types to protect them against danger. Here are some insurance types that a business must have in place as soon as possible</p>
                </div>
                <div class="modal-body">
                    <a href="https://www.irs.gov/Businesses" target="_blank">IRS-Business</a>
                    <p>Business page of the Internal Revenue Service contains links on starting a business, obtaining employer ID numbers, employment taxes and other topics</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/preparing-business-audit-30057.html" target="_blank">How to Prepare for a Tax Audit</a>
                    <p>Who's afraid of the IRS? Almost everyone. The key to surviving a tax audit -- and even coming out on top -- is not to panic, but prepare</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/irs-audit-auditors-small-business-30033.html" target="_blank">What Auditors Look for When Examining a Business</a>
                    <p>Know what an IRS auditor looks for when examining your business and its records</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Real Estate -->
    <div id="rea-est-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Real Estate</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/finding-renting-space-business-faq-29097.html" target="_blank">Finding and Renting Space for Your Business FAQ</a>
                    <p>Almost all small businesses start out in leased (rented) premises, one benefit is that renting makes it easier to move to new quarters should your space needs change, keep reading to learn the pros and cons</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/commercial-lease-basics-29934.html" target="_blank">The Commerical Lease: What You Should Know</a>
                    <p>Before you approach a landlord, you should understand how commercial leases differ from the more common residential variety, and before you sign anything, make sure you understand and agree with the basic terms of the lease</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.nolo.com/legal-encyclopedia/choosing-successful-location-business-29678.html" target="_blank">Choosing a Successful Location for You Business</a>
                    <p>Every business owner must figure out how location will (or won't) contribute to the success of the business -- and choose a spot accordingly</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.offices.net/" target="_blank">Offices.net</a>
                    <p>Use the free search tools on Offices.net to choose the right location, find your perfect office space, and move in. It really is that simple!</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- ******************  News and Misc ********************** -->
    <!-- General Business -->
    <div id="gen-biz-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">General Business</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.forbes.com/" target="_blank">Forbes</a>
                    <p>A leading business journal with articles on companies, industries, economics, trends, and more</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.economist.com/" target="_blank">The Economist</a>
                    <p>In-depth reporting and analysis of the international economy and the events and developments that affect it. Includes mostly free content</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.inc.com" target="_blank">inc.com</a>
                    <p>An absolute must read for entrepreneurs - inc.com is an essential source of information on business formation and managing growth</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.ceoexpress.com/home" target="_blank">CEO Express</a>
                    <p>Dubbed "The Executive's Internet," it includes a large digest of links to just about any and all information an executive would ever need</p>
                </div>
                <div class="modal-body">
                    <a href="http://fortune.com/" target="_blank">Fortune Magazine</a>
                    <p>One of the world's leading business journals with articles on companies, industries, economics, trends, and more</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Minority & Women Owned Business -->
    <div id="min-wom-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Women, Minority & Veteran Owned Business</h4>
                </div>
                <div class="modal-body">
                    <a href="https://www.entrepreneur.com/topic/women-entrepreneurs" target="_blank">Women Entrepreneurs</a>
                    <p>From Entrepreneur.com comes an excellent selection of news and articles geared specifically to women entrepreneurs</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.knoxvillechamber.com/propel-your-small-business" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Propel</a>
                    <p>Propel is a program within the Knoxville Chamber of Commerce designed for woman, veteran, and minority-owned small businesses., facilited by the Chamber's business development manager, Doug Minter.  With his 20-plus year as a small business owner and entrepreneur, Minter can help guide you through the process</p>
                </div>
                 <div class="modal-body">
                    <a href="https://www.nawbo.org/" target="_blank">National Association of Women Business Owners</a>
                    <p>Founded in 1975, the National Association of Women Business Owners (NAWBO) is the unified voice of over 9 million women-owned businesses in the United States</p>
                </div>
                 <div class="modal-body">
                    <a href="http://www.mbemag.com/" target="_blank">Minority Business Entrepreneur Magazine</a>
                    <p>A wonderful online magazine offering a diverse collection of articles and other content for the minority entrepreneur</p>
                </div>
                 <div class="modal-body">
                    <a href="http://www.thekaul.org/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;Knoxville Area Urban League</a>
                    <p>OUR MISSION is to enable African Americans, other minority groups and the underserved to secure economic self-reliance, parity, power and civil rights</p>
                </div>
                 <div class="modal-body">
                    <a href="https://www.entrepreneur.com/topic/veterans" target="_blank">Veterans</a>
                    <p>From none other than Entrepreneur.com, this source for military veterans regarding entrepreneurship as it applies to their unique set of experiences and circumstances</p>
                </div>
                 <div class="modal-body">
                    <a href="http://www.va.gov/osdbu/entrepreneur/" target="_blank">Veteran Entrepreneur Portal</a>
                    <p>This site quickly connects Veteran entrepreneurs to relevant ‘best-practices’ and information. Collectively, VEP offers direct access to the resources necessary to guide every step of entrepreneurship</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Tech Business -->
    <div id="tec-bus-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Technology Driven Business</h4>
                </div>
                <div class="modal-body">
                    <a href="http://techzulu.com/" target="_blank">TechZulu</a>
                    <p>TechZulu is a community and news site for the technology and media industries. Includes a listing of recent venture deals, and video content from interviews, conferences, and more</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.redherring.com/" target="_blank">Red Herring</a>
                    <p>This site is a 'can't miss' for entrepreneurs in the technology sector</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.infoworld.com/" target="_blank">InfoWorld</a>
                    <p>An essential resource for software developers as well as high-tech business entrepreurs</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.wired.com/" target="_blank">Wired</a>
                    <p>The online magazine covering the effects of technology on culture, economics and politics</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.ycombinator.com/" target="_blank">Y Combinator</a>
                    <p>Y Combinator provides seed funding for startups. Seed funding is the earliest stage of venture funding. It pays your expenses while you’re getting started</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Search Optimization -->
    <div id="sea-opt-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Search Engine Optimization</h4>
                </div>
                <div class="modal-body">
                    <a href="https://www.clickz.com/" target="_blank">ClickZ</a>
                    <p>A search engine marketing website offerent fundamentals and trends for search engine optimization and more</p>
                </div>
                <div class="modal-body">
                    <a href="https://moz.com/blog/the-noob-guide-to-online-marketing-with-giant-infographic-11928" target="_blank">The Noob Guide to Online Marketing (With Giant INFOGRAPHIC)</a>
                    <p>This is a 6-Month action plan for going from nothing to having a comprehensive digital marketing operation. It walks you through just about everything you need, step by step. This is a fantastic resource</p>
                </div>
                <div class="modal-body">
                    <a href="http://blog.hubspot.com/blog/tabid/6307/bid/1436/Shortest-Tutorial-Ever-on-SEO-Search-Engine-Optimization.aspx" target="_blank">Shortest Tutorial Ever on SEO</a>
                    <p>If you only read one article about SEO, this could possibly be it</p>
                </div>
                <div class="modal-body">
                    <a href="https://www.searchenginejournal.com/6-traits-of-a-lazy-link-builder/29599/" target="_blank">6 Traits of a Lazy Link Builder</a>
                    <p>Building backlinks to your website the right way requires hard work, creating great content, and asking nicely.These are 6 of the worst habits to avoid</p>
                </div>
                <div class="modal-body">
                    <a href="http://www.conversion-rate-experts.com/cro-tips/" target="_blank">Split-testing 101: A quick-start guide to conversion rate optimization</a>
                    <p>Using split-testing software is a powerful way to increase your website's conversion rate (that is, its ability to turn visitors into customers). Many of the web's most powerful companies, including Amazon and Google, use this technique. Here’s our essential guide to increasing your conversion rate using split-testing software</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Reference and Research -->
    <div id="ref-res-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Reference & Research</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.britannica.com/" target="_blank">Encyclopedia Britannica</a>
                    <p>A timeless resource for research and education</p>
                </div>
                <div class="modal-body">
                    <a href="http://utrf.tennessee.edu/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;University of Tennessee Research Foundation</a>
                    <p>UTRF is a non-profit 501(c)(3) organization that promotes the commercialization of UT intellectual property, encourages an entrepreneurial culture, contributes to state and regional economic development, and promotes research and education to benefit the people of Tennessee and beyond</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

     <!-- Gov & Non-Profit Resources -->
    <div id="gov-non-modal" class="modal fade" role="dialog">
        <div class="modal-dialog">
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Government & Non-Profit Resources</h4>
                </div>
                <div class="modal-body">
                    <a href="http://www.bbb.org/" target="_blank">Better Business Bureau</a>
                    <p>BBB helps people find and recommend businesses, brands and charities they can trust</p>
                </div>
                <div class="modal-body">
                    <a href="http://scoreknox.org/" target="_blank"><span class="glyphicon glyphicon-star-empty"></span>&nbsp;SCORE</a>
                    <p>Service Corps of Retired Executives (SCORE) is a non-profit organization with a local branch in Knoxville offering counseling, workshops and other business resources</p>
                </div>
                <div class="modal-footer">
                <span class="glyphicon glyphicon-star-empty"> = local organization</span>
                    <button type="button" class="btn-close" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Bootstrap core JavaScript
		================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>
        window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')
    </script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>