<form action="<?=base_url()?>masters/all_tahun" method="POST" enctype="multipart/form-data">

<div class="topcolumn">

            <div class="logo"></div>

                            <ul  id="shortcut">

                                <li> <a href="<?=base_url()?>masters/tambah_tahun" title="Back To home"> <img src="<?=base_url()?>assets/template/fingers/images/icon/shortcut/add.png" alt="home" width="40px"/><strong>Tambah</strong> </a> </li>

                                <li> <input type="image" src="<?=base_url()?>assets/template/fingers/images/icon/shortcut/Delete.png" name="image" width="40" height="40" style="margin-top:9.5px; margin-left:17px;"><br/><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hapus</strong></li>

                            </ul>

          </div>           

          <div class="clear"></div> 

          <?=$this->message->display();?>

<div class="onecolumn" >

                    <div class="header">

                    <span ><span class="ico  gray spreadsheet"></span> Daftar Kecamatan </span>

                    </div><!-- End header --> 

                    <div class=" clear"></div>

                    <div class="content" >                      

                              <table class="display static " id="static">

                                <thead>

                                  <tr>

                                    <th width="35" ><input type="checkbox" id="checkAll1"  class="checkAll"/></th>

                                    <th align="left">Name</th>

                                    <th align="left" width="300">Status</th>

                                    <th width="199" >Management</th>

                                  </tr>

                                </thead>

                                <tbody>                                

                                <?

                                $no = 1;

                                foreach($kueri as $dt_kueri)

                                {                      

                                ?>

                                  <tr>

                                    <td  width="35" ><input type="checkbox" name="check[]" class="chkbox"  id="check<?=$no?>" value="<?=$dt_kueri->id_ta?>"/></td>

                                    <td  align="left"><?=$dt_kueri->nama_ta?></td>

                                    <td  align="left"><?=$this->arey->getStatusTa($dt_kueri->status_ta)?></td>

                                    <td >          

                                      <span class="tip" >

                                          <?

                                          if($dt_kueri->status_ta == 1)

                                          {

                                            ?>

                                            <a  title="Unset Tahun Ajaran" href="<?=base_url()?>masters/set_tahun/<?=$dt_kueri->id_ta?>/2" >

                                                <img src="<?=base_url()?>assets/template/fingers/images/icon/color_18/cross.png" >

                                            </a>

                                            <?

                                          }

                                          else

                                          {

                                            ?>

                                            <a  title="Set Tahun Ajaran" href="<?=base_url()?>masters/set_tahun/<?=$dt_kueri->id_ta?>/1" >

                                                <img src="<?=base_url()?>assets/template/fingers/images/icon/color_18/checkmark2.png" >

                                            </a>

                                            <?

                                          }

                                          ?>                                          

                                      </span> 

                                      <span class="tip" >

                                          <a  title="Edit Tahun Ajaran" href="<?=base_url()?>masters/edit_tahun/<?=$dt_kueri->id_ta?>" >

                                              <img src="<?=base_url()?>assets/template/fingers/images/icon/icon_edit.png" >

                                          </a>

                                      </span> 

                                      <span class="tip" >

                                          <a id="<?=$no?>" class="Delete"  name="Band ring" title="Delete Tahun Ajaran" href="<?=base_url()?>masters/hapus_tahun/<?=$dt_kueri->id_ta?>"  >

                                              <img src="<?=base_url()?>assets/template/fingers/images/icon/icon_delete.png" >

                                          </a>

                                      </span> 

                                        </td>

                                  </tr>                                  

                                  <? 

                                  $no++;

                                  } 

                                  ?>

                                </tbody>

                              </table>

</form>

<?=$paging?>

          </div>

</div>