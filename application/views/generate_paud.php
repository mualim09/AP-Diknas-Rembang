<div class="topcolumn">

            <div class="logo"></div>

                            <ul  id="shortcut">

                                <li> <a href="<?=base_url()?>manajemen/paud" title="Back To home"> <img src="<?=base_url()?>assets/template/fingers/images/icon/shortcut/home.png" alt="home" width="40px"/><strong>Daftar</strong> </a> </li>

                            </ul>      

          </div>  

          <div class="clear"></div>          

                    <div class="clear"></div>

                        

                  <div class="onecolumn" >

                  <div class="header"><span ><span class="ico  gray user"></span><?=$ket?></span> </div><!-- End header --> 

                  <div class="clear"></div>

                  <div class="content" >                      

                    <div class="tab_container" >



                          <div id="tab1" class="tab_content"> 

                              <div class="load_page">                        

                                 

                                <div class="formEl_b">  

                                <form id="validation" action="<?=base_url()?>manajemen/<?=$link?>" method="POST"> 

                                <fieldset >

                                <legend><?=$ket?> <span class="small s_color">( <?=$jenis?> )</span></legend>                                                                                                             

                                      <div class="section">

                                      <label> E-mail </label>

                                      <div>

                                      <input type="text"  name="email" id="email"  class="validate[required,custom[email]] medium"  />

                                      </div>                        

                                      </div>                                                                                                                                                          

                                      <div class="section last">

                                      <div>

                                        <a class="uibutton submit_form" >Generate</a><a class="uibutton special"   onClick="ResetForm()" title="Reset  Form"   >Reset Form</a>

                                     </div>

                                     </div>

                                </fieldset>

                                </form>

                                </div>

                              </div>  

                          </div><!--tab1-->                                                                                                      

                  </div>                  

                  <div class="clear"/></div>                  

                  </div>

                  </div>