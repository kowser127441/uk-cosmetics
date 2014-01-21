
<?php

$product_id = $_REQUEST['product_id'];

include('productClass.php');

$product = new Product($product_id);

$product_info = $product->getProductInfo($product_id);

?>

  


    <link rel="stylesheet" type="text/css" href="http://images.buzzillions.com/services/pack/h-2095489965.css" charset="utf-8"/><!--[if ie 5 ]>
    <link rel="stylesheet" type="text/css" href="http://images.buzzillions.com/services/pack/h1297618653.css" charset="utf-8"/><![endif]-->
    <!--[if lte ie 7 ]>
    <link rel="stylesheet" type="text/css" href="http://images.buzzillions.com/services/pack/h2038955504.css" charset="utf-8"/><![endif]-->

    <style type="text/css">
        
                @import "http://www.superdrug.com/content/ebiz/superdrug/resources/css/override_styles.css";
                </style>

    <script type="text/javascript" src="http://images.buzzillions.com/services/pack/h397528599.js" charset="utf-8"></script><script type="text/javascript">
        var gSubmitted = false;
        var $A = YAHOO.util.Anim;
        var $C = YAHOO.util.Connect;
        var $D = YAHOO.util.Dom;
        var $E = YAHOO.util.Event;
        var $El = YAHOO.util.Element;
        var $ = $D.get;

        var pendingOnLoadScripts = [];

        appendPendingScriptAtEnd = function(s) {
            pendingOnLoadScripts.push(s);
        }
        injectPendingScriptAtHead = function(s) {
            pendingOnLoadScripts.unshift(s);
        }
        execPendingScripts = function() {
            for (var i = 0, c = pendingOnLoadScripts.length; i < c; ++i) {
                //alert('Executing ' + pendingOnLoadScripts[i].toString());
                pendingOnLoadScripts[i]();    
            }
        }
    </script>


<style type="text/css">
    a.correctedWords {
        padding-left: 10px;
    }

    
    div.prStars.prStarsSubrating {
        background-image: url(http://images.buzzillions.com/images/stars_subrating.gif);
    }

    </style>

<script type="text/javascript">
<!--
var apostropheReplacement = "~~~APOS~~~";
var quoteReplacement = '~~~QUOT~~~';
var gUserAttributePrefix = 'u_attr_';
var sHiddenTagPrefix = 'hidden_tag_';
var sHiddenStarsPrefix = 'hidden_stars_';
var sCustomAttrPrefix = 'custom_list_';

var modelId = '17438471';
var templateId = '12667';
var tagSuggestCommand = 'suggest';
var tagSuggestUrl = '/tags.dx';

var selectedStars = new Array();


var theLocale = "en_GB";

var hashBank = {};


var Hashpros = {};
hashBank['pros'] = Hashpros;

var Hashcons = {};
hashBank['cons'] = Hashcons;

var Hashbestuses = {};
hashBank['bestuses'] = Hashbestuses;

var Hashdescribeyourself = {};
hashBank['describeyourself'] = Hashdescribeyourself;

function init()
{
    var elements = $("reviewForm").elements;
    for (var i = 0; i < elements.length; i++) {
        element = elements[i];
        var id = element.id;
        var value = element.value;
        if (id.indexOf('hidden_stars_') != -1) {
            if (value != '') {
                var starId = id.substring(13);
                selectStars(value, starId);
            }
        } else if (id.indexOf('hidden_tag_') != -1) {
            if (value.charAt(0) == '1' || value == 1) {
                var tagId = id.substring(11);
                YAHOO.util.Dom.replaceClass('checkmark_' + tagId, 'unchecked', 'checked');
            }
        } else if (id.indexOf('custom_list_') != -1) {
            if (value != '') {
                var tagGroupNameClean = id.substring(12);
                var attrs = value.split("|");
                for (var j = 0; j < attrs.length; j++) {
                    add(hashBank[tagGroupNameClean], tagGroupNameClean, attrs[j]);
                }
            }
        }
    }

    for (var n in hashBank) {
        drawHash(hashBank[n], n);
    }

    // initialize stars
    var o = 2594990;
    var ids = ["prStar-1", "prStar-2", "prStar-3", "prStar-4", "prStar-5"];
    $E.addListener(ids, "mouseover", starMouseOver, o);
    $E.addListener(ids, "click", starClick, o);
    $E.addListener("prStars-2594990", "mouseout", starMouseOut, o);

    // try to focus cursor on first form element (which will usually be headline input)
    try {
        document.forms[0].elements[0].focus();
    } catch (ignore) {
    }

    // initialize character count for comments box
    $E.addListener("experience_value", "keyup", commentKeyUp, o);
    $E.onContentReady("experience_value", commentKeyUp);
}

function commentKeyUp(e, commentFieldId) {
    var reviewCounterDiv = document.getElementById("sllongreviewcounter");
    if (reviewCounterDiv != null) {
        var numCharacters = this.value.replace(/\s+/g, '').length;
        var characterString = ' ' + 'characters';
        if (numCharacters === 1) {
            characterString = ' ' + 'character';
        }
        reviewCounterDiv.innerHTML = numCharacters + characterString;
    }
}

function starMouseOver(e, starsId) {
    var numStars = parseInt(this.id.charAt(this.id.length - 1));
    if (!selectedStars[starsId]) {
        showStars(numStars, starsId);
    }
    writeContentToDiv('ratingMessageDiv-' + starsId, altTextArr[numStars]);
}
function starMouseOut(e, starsId) {
    var ratingsLabel = 'Click to rate product'
    if (!selectedStars[starsId]) {
        YAHOO.util.Dom.setStyle('prStars-' + starsId, 'background-position', '0px 0px');
    } else {
        ratingsLabel = altTextArr[0];
    }
    writeContentToDiv('ratingMessageDiv-' + starsId, ratingsLabel);
}

function starClick(e, starsId) {
    var numStars = parseInt(this.id.charAt(this.id.length - 1));
    selectStars(numStars, starsId);
}
function selectStars(numStars, starsId) {
    showStars(numStars, starsId);
    selectedStars[starsId] = true;
    altTextArr[0] = altTextArr[numStars];
    $('hidden_stars_' + starsId).value = numStars;
}
function showStars(numStars, starsId) {
    var yOffset = -1 * (parseInt(YAHOO.util.Dom.getStyle('prStars-' + starsId, 'height')) + 3) * 2 * numStars;
    YAHOO.util.Dom.setStyle('prStars-' + starsId, 'background-position', '0px ' + yOffset + 'px');
    writeContentToDiv('ratingMessageDiv-' + starsId, altTextArr[numStars]);
    return numStars;
}

var pageButtons = [];
var requiredElementsFull = [];
function validate(command) {
    var foundErrors = false;
    var firstError = null;
    try {
        for (var ix in requiredElementsFull) {
            var requiredElementInfo = requiredElementsFull[ix];
            if (!validateSingleElement(requiredElementInfo)) {
                if ($(requiredElementInfo.label_id)) {
                    $(requiredElementInfo.label_id).className = "requiredError";
                }
                if (firstError == null) firstError = requiredElementInfo;
                foundErrors = true;
            }
            else {
                if ($(requiredElementInfo.label_id)) {
                    $(requiredElementInfo.label_id).className = "required";
                }
            }
        }
        if (foundErrors) {
            alert("Your review is incomplete.  Please fill in all required fields.");
            var scrollTargetElement = $(firstError.label_id);
            if (scrollTargetElement) {
                window.scrollTo(null, scrollTargetElement.offsetTop - scrollTargetElement.scrollTop);
            }
            if (firstError.accepts_focus) {
                $(firstError.value_id).focus();
            }
            return false;
        }

    
        if ($("experience_value").value.length > 25000 || ($("service_value") && $("service_value").value.length > 25000)) {
            alert("Your review is too long.  Please shorten it to less than 25000 characters.");
            return false;
        }
    } catch(e) {
        if (typeof(prAnalytics) != "undefined" && typeof(prAnalytics.trackPageview) == "function") {
            prAnalytics.trackPageview("/validation_error/");
        }
        alert("We're sorry, there was unknown error validating your review.  Please try again later.");
        return false;
    }

    sendForm('reviewForm', 'command', command, pageButtons);
}

function validateSingleElement(requiredElementInfo) {
    if (requiredElementInfo.type == 'BL' || requiredElementInfo.type == 'TAG-RADIO') {
        var anyButtonChecked = false;
        var buttonGroup = $('reviewForm')[requiredElementInfo.value_id];
        for (var ix = buttonGroup.length - 1; ix > -1; ix--) {
            anyButtonChecked = anyButtonChecked || buttonGroup[ix].checked;
        }
        return anyButtonChecked;
    }
    if (requiredElementInfo.type == 'TAG-DROPDOWN') {
        var dropdownElement = $('reviewForm')[requiredElementInfo.value_id];
        return dropdownElement.value != "";
    }
    else if (requiredElementInfo.type == 'RA' || requiredElementInfo.type == 'AR') {
        var el = $(requiredElementInfo.value_id);
        return el.value != 0;
    } else {
        var el = $(requiredElementInfo.value_id);
        var val = trim(el.value);
        return val != "";
    }
}

function resetRadioButtons(radioGrpName) {
    radioBttns = $('reviewForm')[radioGrpName];
    for (var i = 0; i < radioBttns.length; i++) {
        $(radioBttns[i]).checked = false
    }
}

// -->

</script>
<script type="text/javascript">
    var altTextArr = new Array(6);
    
    altTextArr[0] = "Click to rate product";
    
    altTextArr[1] = "Not Good";
    
    altTextArr[2] = "Needs That Special Something";
    
    altTextArr[3] = "Average, Ordinary";
    
    altTextArr[4] = "That's Good Stuff";
    
    altTextArr[5] = "Perfect. It doesn't get any better";
    </script>
  
<script type="text/javascript" src="http://images.buzzillions.com/services/pack/h1515061183.js" charset="utf-8"></script>
<form id="reviewForm"  method="post" enctype="multipart/form-data" action="reviewing.php">
<input type="hidden" name="product_id"  value="<?php echo $product_info['product_id'];?>" />

<div class="prwrapper">

<div class="printro" id="pr_intro_text_submit">
    <h1 id="pagelabel"></h1>

    <h1>Write a review of this product to share your opinions with others.</h1>


    <p class="medsmall">
                Thank you for sharing your thoughts about one of our products! Please focus on the product performance and quality. Please read our  <a href="javascript:showSmallPopup('http://www.powerreviews.com/legal/privacy_policy_en_GB.html');">Privacy Policy (NEW!)</a> and <a href="javascript:showSmallPopup('http://www.powerreviews.com/legal/terms_of_use_en_GB.html');">Terms of Use (NEW!)</a> for more information about the review process.</p>
        </div>
<div class="prsummarywrap">	<div class="prproductsummary"><img alt="product image" src="<?php echo $product_info['picture_url']; ?>" style="width: 100px"/><h2><span class="productName"><a href="view_product.php?product_id=<?php echo $product_info['product_id']; ?>" target="_top" ><?php echo $product_info['product_name']; ?></a></span> <span class="brandName">by Barry M</span></h2><p class="prproductdescription"><?php echo $product_info['details']; ?>. Can be applied...</p></div><!--prproductsummary--></div><!--prsummarywrap--><div class="requirednotice"></div>

<div class="prinputgroup" id="headline">
        <div class="prlabel">
            <h3 id="headline_label" class="required"><label
                    for="headline_value">Review Headline:</label></h3>

            <p class="instructions"></p>
        </div>
            <div class="prfieldwrap">
            <div class="prfields">
                <input class="inputBox" id="headline_value" onkeypress="return disableEnterKey(event);" type="text"
                       maxlength="40" size="40"
                       name="headline"
                       value=""/>

                <div class="tipwrap">
                    <p class="tiptoggle"><a tabindex="30" href="javascript:void(0);"
                                            onclick="toggleVisibility('headlineTipsDiv',this); return false;"><span
                            class="show">Show examples</span><span
                            class="hide">Hide examples</span></a>
                    </p>

                    <div class="tips" style="display:none;" id="headlineTipsDiv"><ul><li>‘Best purchase ever!’</li><li>‘Couldn’t wait to use it!’</li><li>‘Told all my friends’</li><li>‘Definite must buy again!’</li></ul></div>
                </div>
                    <div class="break"></div>
            </div>
                </div>
            <div class="break"></div>
    </div>
    <div class="prinputgroup" id="rating">
        <div class="prlabel">
            <h3 id="rating_label" class="required">Your Rating:</h3>

            <p class="instructions">Click to rate</p>
        </div>
        <!-- prlabel-->
        <div class="prfieldwrap">
            <div class="prfields">
                <div class="prStars" id="prStars-2594990">
                    <div class="prStar prS1" id="prStar-1"></div>
                    <div class="prStar prS2" id="prStar-2"></div>
                    <div class="prStar prS3" id="prStar-3"></div>
                    <div class="prStar prS4" id="prStar-4"></div>
                    <div class="prStar prS5" id="prStar-5"></div>
                </div>
                <input type="hidden" id="hidden_stars_2594990" name="rating"
                       value=""/>

                <div class="ratingMessage" id="ratingMessageDiv-2594990">Click to rate product</div>
                <div class="break"></div>
            </div>
                </div>
            <div class="break"></div>
    </div>
    <div class="break"></div>
    <div class="break"></div>

    <div class="prinputgroup" id="pros">
        <div class="prlabel">
                <h3 id="ag_label_26397" class="">Pros:</h3>
                <p class="instructions"></p>
        </div> <div class="prfieldwrap">
            <div class="prfields">
                <div class="checkboxes">
                            <p id="pros_click_all_text">
                                Click all that apply:</p>
                            <script type="text/javascript">
	document.write('<p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093686" href="#" onclick="toggleTag(\'1093686\'); return false;">&nbsp;Compact</a></p><input type="hidden" name="attr_1093686" id="hidden_tag_1093686" value="0" /><input type="hidden" name="page_pos_attr_1093686" value="1"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093687" href="#" onclick="toggleTag(\'1093687\'); return false;">&nbsp;Easy To Use</a></p><input type="hidden" name="attr_1093687" id="hidden_tag_1093687" value="0" /><input type="hidden" name="page_pos_attr_1093687" value="2"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093688" href="#" onclick="toggleTag(\'1093688\'); return false;">&nbsp;Functional</a></p><input type="hidden" name="attr_1093688" id="hidden_tag_1093688" value="0" /><input type="hidden" name="page_pos_attr_1093688" value="3"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093689" href="#" onclick="toggleTag(\'1093689\'); return false;">&nbsp;Time Saver</a></p><input type="hidden" name="attr_1093689" id="hidden_tag_1093689" value="0" /><input type="hidden" name="page_pos_attr_1093689" value="4">');
</script>
<noscript>
<input type="checkbox" name="attr_1093686" id="attr_1093686" />
Compact<br /><input type="checkbox" name="attr_1093687" id="attr_1093687" />
Easy To Use<br /><input type="checkbox" name="attr_1093688" id="attr_1093688" />
Functional<br /><input type="checkbox" name="attr_1093689" id="attr_1093689" />
Time Saver</noscript>
<div style="display:inline;" id="Divpros">&nbsp;</div>
                        </div> <div class="addTags" id="pros_addbox">
                            <p>
                                Add your <strong><em>own</em></strong>
                                :<span class="smallnote"><br/>(one at a time)</span>
                            </p>
                            <script type="text/javascript">
	document.write('<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_pros" onfocus="startTagSuggestCheck(this, \'pros\', \'pros\')" onblur="stopTagSuggestCheck(this)" onkeypress="return addTagWithEnterKey(event, Hashpros, \'pros\');" size="25" maxlength="25" /><a class="button subtle tagsuggest" href="#" onclick="addTagWithAddButton(Hashpros, \'pros\'); $(\'u_attr_pros\').focus(); return false;" ><span>Add</span></a></p>');
</script>
<noscript>
<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_pros" size="25" maxlength="25" /></noscript>
<input type="hidden" id="u_attr_pros_hidden" />
                            <div id="suggest_text_pros_empty">
                                <p class="addInstructions">
                                    Start entering your own tags and we will display suggestions if others have added words in similar letter combinations.</p>
                            </div>
                            <div id="suggest_text_pros_not_empty" style="display:none"><p class="medsmall"><strong>Suggestions:</strong> (click link to add to list on left)</p></div>
                            <div id="u_attr_pros_suggestions"></div>
                            <input type="hidden" id="custom_list_pros" name="custom_list_pros" value="" />
                        </div><div class="break"></div>
            </div> </div> <div class="break"></div>
    </div><div class="break"></div>
    <div class="break"></div>

    <div class="prinputgroup" id="cons">
        <div class="prlabel">
                <h3 id="ag_label_26398" class="">Cons:</h3>
                <p class="instructions"></p>
        </div> <div class="prfieldwrap">
            <div class="prfields">
                <div class="checkboxes">
                            <p id="cons_click_all_text">
                                Click all that apply:</p>
                            <script type="text/javascript">
	document.write('<p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093690" href="#" onclick="toggleTag(\'1093690\'); return false;">&nbsp;Bulky</a></p><input type="hidden" name="attr_1093690" id="hidden_tag_1093690" value="0" /><input type="hidden" name="page_pos_attr_1093690" value="1"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093691" href="#" onclick="toggleTag(\'1093691\'); return false;">&nbsp;Hard To Use</a></p><input type="hidden" name="attr_1093691" id="hidden_tag_1093691" value="0" /><input type="hidden" name="page_pos_attr_1093691" value="2"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093692" href="#" onclick="toggleTag(\'1093692\'); return false;">&nbsp;Ineffective</a></p><input type="hidden" name="attr_1093692" id="hidden_tag_1093692" value="0" /><input type="hidden" name="page_pos_attr_1093692" value="3"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093693" href="#" onclick="toggleTag(\'1093693\'); return false;">&nbsp;Poor Quality</a></p><input type="hidden" name="attr_1093693" id="hidden_tag_1093693" value="0" /><input type="hidden" name="page_pos_attr_1093693" value="4">');
</script>
<noscript>
<input type="checkbox" name="attr_1093690" id="attr_1093690" />
Bulky<br /><input type="checkbox" name="attr_1093691" id="attr_1093691" />
Hard To Use<br /><input type="checkbox" name="attr_1093692" id="attr_1093692" />
Ineffective<br /><input type="checkbox" name="attr_1093693" id="attr_1093693" />
Poor Quality</noscript>
<div style="display:inline;" id="Divcons">&nbsp;</div>
                        </div> <div class="addTags" id="cons_addbox">
                            <p>
                                Add your <strong><em>own</em></strong>
                                :<span class="smallnote"><br/>(one at a time)</span>
                            </p>
                            <script type="text/javascript">
	document.write('<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_cons" onfocus="startTagSuggestCheck(this, \'cons\', \'cons\')" onblur="stopTagSuggestCheck(this)" onkeypress="return addTagWithEnterKey(event, Hashcons, \'cons\');" size="25" maxlength="25" /><a class="button subtle tagsuggest" href="#" onclick="addTagWithAddButton(Hashcons, \'cons\'); $(\'u_attr_cons\').focus(); return false;" ><span>Add</span></a></p>');
</script>
<noscript>
<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_cons" size="25" maxlength="25" /></noscript>
<input type="hidden" id="u_attr_cons_hidden" />
                            <div id="suggest_text_cons_empty">
                                <p class="addInstructions">
                                    Start entering your own tags and we will display suggestions if others have added words in similar letter combinations.</p>
                            </div>
                            <div id="suggest_text_cons_not_empty" style="display:none"><p class="medsmall"><strong>Suggestions:</strong> (click link to add to list on left)</p></div>
                            <div id="u_attr_cons_suggestions"></div>
                            <input type="hidden" id="custom_list_cons" name="custom_list_cons" value="" />
                        </div><div class="break"></div>
            </div> </div> <div class="break"></div>
    </div><div class="break"></div>
    <div class="break"></div>

    <div class="prinputgroup" id="bestuses">
        <div class="prlabel">
                <h3 id="ag_label_26399" class="">Best Uses:</h3>
                <p class="instructions"></p>
        </div> <div class="prfieldwrap">
            <div class="prfields">
                <div class="checkboxes">
                            <p id="bestuses_click_all_text">
                                Click all that apply:</p>
                            <script type="text/javascript">
	document.write('<p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093703" href="#" onclick="toggleTag(\'1093703\'); return false;">&nbsp;Everyday</a></p><input type="hidden" name="attr_1093703" id="hidden_tag_1093703" value="0" /><input type="hidden" name="page_pos_attr_1093703" value="1"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093704" href="#" onclick="toggleTag(\'1093704\'); return false;">&nbsp;Going Out</a></p><input type="hidden" name="attr_1093704" id="hidden_tag_1093704" value="0" /><input type="hidden" name="page_pos_attr_1093704" value="2"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1093705" href="#" onclick="toggleTag(\'1093705\'); return false;">&nbsp;Travel</a></p><input type="hidden" name="attr_1093705" id="hidden_tag_1093705" value="0" /><input type="hidden" name="page_pos_attr_1093705" value="3">');
</script>
<noscript>
<input type="checkbox" name="attr_1093703" id="attr_1093703" />
Everyday<br /><input type="checkbox" name="attr_1093704" id="attr_1093704" />
Going Out<br /><input type="checkbox" name="attr_1093705" id="attr_1093705" />
Travel</noscript>
<div style="display:inline;" id="Divbestuses">&nbsp;</div>
                        </div> <div class="addTags" id="bestuses_addbox">
                            <p>
                                Add your <strong><em>own</em></strong>
                                :<span class="smallnote"><br/>(one at a time)</span>
                            </p>
                            <script type="text/javascript">
	document.write('<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_bestuses" onfocus="startTagSuggestCheck(this, \'bestuses\', \'bestuses\')" onblur="stopTagSuggestCheck(this)" onkeypress="return addTagWithEnterKey(event, Hashbestuses, \'bestuses\');" size="25" maxlength="25" /><a class="button subtle tagsuggest" href="#" onclick="addTagWithAddButton(Hashbestuses, \'bestuses\'); $(\'u_attr_bestuses\').focus(); return false;" ><span>Add</span></a></p>');
</script>
<noscript>
<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_bestuses" size="25" maxlength="25" /></noscript>
<input type="hidden" id="u_attr_bestuses_hidden" />
                            <div id="suggest_text_bestuses_empty">
                                <p class="addInstructions">
                                    Start entering your own tags and we will display suggestions if others have added words in similar letter combinations.</p>
                            </div>
                            <div id="suggest_text_bestuses_not_empty" style="display:none"><p class="medsmall"><strong>Suggestions:</strong> (click link to add to list on left)</p></div>
                            <div id="u_attr_bestuses_suggestions"></div>
                            <input type="hidden" id="custom_list_bestuses" name="custom_list_bestuses" value="" />
                        </div><div class="break"></div>
            </div> </div> <div class="break"></div>
    </div><div class="break"></div>
    <div class="break"></div>

    <div class="prinputgroup" id="describeyourself">
        <div class="prlabel">
                <h3 id="ag_label_26310" class="">Describe Yourself:</h3>
                <p class="instructions"></p>
        </div> <div class="prfieldwrap">
            <div class="prfields">
                <div class="checkboxes">
                            <p id="describeyourself_click_all_text">
                                Click all that apply:</p>
                            <script type="text/javascript">
	document.write('<p class="checkitem"><a class="checkbox unchecked" id="checkmark_1087860" href="#" onclick="toggleTag(\'1087860\'); return false;">&nbsp;Budget Oriented</a></p><input type="hidden" name="attr_1087860" id="hidden_tag_1087860" value="0" /><input type="hidden" name="page_pos_attr_1087860" value="1"><p class="checkitem"><a class="checkbox unchecked" id="checkmark_1087861" href="#" onclick="toggleTag(\'1087861\'); return false;">&nbsp;Quality Oriented</a></p><input type="hidden" name="attr_1087861" id="hidden_tag_1087861" value="0" /><input type="hidden" name="page_pos_attr_1087861" value="2">');
</script>
<noscript>
<input type="checkbox" name="attr_1087860" id="attr_1087860" />
Budget Oriented<br /><input type="checkbox" name="attr_1087861" id="attr_1087861" />
Quality Oriented</noscript>
<div style="display:inline;" id="Divdescribeyourself">&nbsp;</div>
                        </div> <div class="addTags" id="describeyourself_addbox">
                            <p>
                                Add your <strong><em>own</em></strong>
                                :<span class="smallnote"><br/>(one at a time)</span>
                            </p>
                            <script type="text/javascript">
	document.write('<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_describeyourself" onfocus="startTagSuggestCheck(this, \'describeyourself\', \'describeyourself\')" onblur="stopTagSuggestCheck(this)" onkeypress="return addTagWithEnterKey(event, Hashdescribeyourself, \'describeyourself\');" size="25" maxlength="25" /><a class="button subtle tagsuggest" href="#" onclick="addTagWithAddButton(Hashdescribeyourself, \'describeyourself\'); $(\'u_attr_describeyourself\').focus(); return false;" ><span>Add</span></a></p>');
</script>
<noscript>
<p style="position: relative; margin:0; padding:0"><input class="inputBox" type="text" id="u_attr_describeyourself" size="25" maxlength="25" /></noscript>
<input type="hidden" id="u_attr_describeyourself_hidden" />
                            <div id="suggest_text_describeyourself_empty">
                                <p class="addInstructions">
                                    Start entering your own tags and we will display suggestions if others have added words in similar letter combinations.</p>
                            </div>
                            <div id="suggest_text_describeyourself_not_empty" style="display:none"><p class="medsmall"><strong>Suggestions:</strong> (click link to add to list on left)</p></div>
                            <div id="u_attr_describeyourself_suggestions"></div>
                            <input type="hidden" id="custom_list_describeyourself" name="custom_list_describeyourself" value="" />
                        </div><div class="break"></div>
            </div> </div> <div class="break"></div>
    </div><div class="prinputgroup" id="experience">
        <div class="prlabel">
            <h3 id="experience_label" class="required"><label
                    for="experience_value">Comments:</label></h3>

            <p class="instructions"></p>
        </div>
            <div class="prfieldwrap">
            <div class="prfields">
                <div id="pr_comment_prompts">
                            The most useful comments contain specific examples about:<ul><li>How you use the product</li><li>Things that are great about it</li><li>Things that aren't so great about it</li></ul></div>
                        <textarea id="experience_value" class="commentbox" cols="40" rows="10"
                                  name="comment"></textarea>

                        <div id="pr_comment_prompts_bottom"><i>Please do not include: HTML, references to other retailers, pricing, personal information, or any profane, inflammatory or copyrighted comments.</i></div>

                    <div class="break"></div>
            </div>
                </div>
            <div class="break"></div>
    </div>
    <div class="prinputgroup" id="nickname">
                <div class="prlabel">
                    <h3 id="nickname_label" class="required"><label
                            for="nickname_value">Nickname:</label></h3>

                    <p class="instructions">E.g. Jim the Runner</p>
                </div>
                    <div class="prfieldwrap">
                    <div class="prfields">
                        <input id="nickname_value" class="inputBox" onkeypress="return disableEnterKey(event);"
                               type="text" maxlength="40" size="40"
                               name="nickname"
                               value=""/>

                        <div class="break"></div>
                    </div>
                        </div>
                    <div class="break"></div>
            </div>
            <div class="prinputgroup" id="location">
                <div class="prlabel">
                    <h3 id="location_label" class="required"><label
                            for="location_value">Your Location:</label></h3>

                    <p class="instructions">E.g. London</p>
                </div>
                    <div class="prfieldwrap">
                    <div class="prfields">
                        <input id="location_value" class="inputBox" onkeypress="return disableEnterKey(event);"
                               type="text" maxlength="40" size="40"
                               name="location"
                               value=""/>

                        <div class="break"></div>
                    </div>
                        </div>
                    <div class="break"></div>
            </div>
            <div class="prinputgroup" id="bottomline">
        
         <div class="break"></div>
    </div><script type="text/javascript">
    requiredElementsFull = requiredElementsFull.concat([{"label_id":"headline_label","value_id":"headline_value","type":"HE","accepts_focus":true},{"label_id":"rating_label","value_id":"hidden_stars_2594990","type":"RA","accepts_focus":false},{"label_id":"experience_label","value_id":"experience_value","type":"CO","accepts_focus":true},{"label_id":"nickname_label","value_id":"nickname_value","type":"NA","accepts_focus":true},{"label_id":"location_label","value_id":"location_value","type":"LO","accepts_focus":true}]);
</script>

<div class="prsubmit mainform">
    <a id="prSubmit" href="javascript:void(0);" onclick="validate('submitReview1'); return false;"
       class="button rtarrow">
        <span>Preview</span>
    </a>

    <div id="prUnderPreviewButtonText"></div>
</div>
<br/>
<br/>

<div class="prfootertext">
    </div>

<div class="poweredby graya en_GB">
                </div>
        <script src="http://www.google-analytics.com/ga.js" type="text/javascript"></script>  <script type="text/javascript">
    prEncode = encodeURIComponent || escape;

    var prAnalytics = function () {

        var pageTracker = _gat._getTracker("UA-237328-3");

        return {
            trackPageview: function(url) {
                pageTracker._trackPageview(url);
            },

            trackPageviewFromData: function(pageName, dataArray) {
                var url = "/submit2verify/";
                url += pageName + "_page";
                for (var ix in dataArray) {
                    var dataHash = dataArray[ix];
                    url += "/" + prEncode(dataHash.key) + "_" + prEncode(dataHash.value);
                }

                this.trackPageview(url);
            }
        };
    }();
    
    try {
        var pageName = "start";
        var passedStats = [{"key":"templateVersion","value":null},{"key":"netPromoter","value":null},{"key":"rating","value":"0"},{"key":"numPros","value":"0"},{"key":"numCons","value":"0"},{"key":"numBestUses","value":"0"},{"key":"commentLength","value":"0000"},{"key":"templateName","value":"Cosmetic Tools "},{"key":"templateId","value":"012667"},{"key":"categoryId","value":"22620"},{"key":"merchantId","value":"99533"}];
        prAnalytics.trackPageviewFromData(pageName, passedStats);
    } catch(ignore) {}
</script><script type="text/javascript" src="//static.powerreviews.com/t/v1/tracker.js"></script>
<script type="text/javascript">
    var tracker = POWERREVIEWS.tracker.createTracker({
        merchantGroupId: "15482",
        parameterAbbreviations: {
            displayVersion: 'v',
            eventFlow: 'ef'
        }
    });

    tracker.trackPageview('wr', {
        locale: "en_GB",
        pageId: "429650",
        merchantId: "99533",
        siteId: "1",
        displayVersion: "1",
        eventFlow: "start"
    });

    (function trackEvents() {
        if (typeof $D !== 'undefined') {
            var warDiv = $D.getElementsByClassName('prwrapper')[0];
            if (warDiv) {
                tracker.trackClickEvents(warDiv, 'wr', {
                    locale: "en_GB",
                    pageId: "429650",
                    merchantId: "99533",
                    siteId: "1",
                    displayVersion: "1",
                    eventFlow: "start"
                });
            } else {
                setTimeout(trackEvents, 200);
            }
        }
    })();
</script>
<div id="resizeIframeContainer"></div>
<script type="text/javascript">
    function resizeIframe(doScroll)
    {
    
        var t = 0;
        if (doScroll)
        {
            t = new Date().getTime();
        }

        var h = document.body.offsetHeight;
        
        if (document.all && !document.documentMode)
        {
            if (document.compatMode && document.compatMode != 'BackCompat')
            {
                h = document.documentElement.scrollHeight;
            }
            else
            {
                h = document.body.scrollHeight;
            }
        }

        

        h += 150;

        

        var resizeSrc = "http://www.superdrug.com/partners/pwr/engine/js/resize.html?h=" + h + "&t=" + t;
        // create resize iframe; might do this with document.createElement('iframe'), but setting appropriate styles is easier for now with just innerHtml
        var resizeIframeMarkup = '<iframe id="inneriframe" src="' + resizeSrc + '" name="inneriframe" width="1" height="1" style="position: absolute; top: -9999px; left: -9999px"></iframe>';
        document.getElementById('resizeIframeContainer').innerHTML = resizeIframeMarkup;
    
    }
</script>
<script type="text/javascript">
    
    if (typeof init == 'function')
    {
        init();
    }

    if(typeof resizeIframe == 'function'){
        resizeIframe(true);
    }
</script>
</div>
<input type="hidden" id="command" name="command"
       value="submitReview1"/>
<input type="hidden" name="sourcePage" id="hidden_source" value="setupReview"/>
</form>

<div style="position: absolute; top: -9999px; left: -9999px">
    <a class="button inactive">cache</a>
    <a class="checkbox checked">cache</a>
</div>

<script type="text/javascript">
    var io_bb_callback = function (bb, isComplete)
    { // populate hidden form fields in both forms
        var iovbb = $('ioBlackBox');
        if (iovbb != undefined) {
            iovbb.value=bb;
        }
    };
</script>
<!-- iovation -->
        <script type="text/javascript" src="https://mpsnare.iesnare.com/snare.js"></script>


