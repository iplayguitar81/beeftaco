<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class boxscore extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'boxscores';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['game_string:string', 'datey:string', 'dashy_date:string', 'afname:string', 'hfname:string', 'atotal:string', 'htotal:string', 'arena:string', 'capacity:string', 'attendance:string', 'ref1:string', 'ref2:string', 'ref3:string', 'hp1_name:string', 'hp1_min:string', 'hp1_pts:string', 'hp1_fgma:string', 'hp1_3pma:string', 'hp1_ftma:string', 'hp1_oreb:string', 'hp1_dreb:string', 'hp1_reb:string', 'hp1_ast:string', 'hp1_stl:string', 'hp1_blk:string', 'hp1_to:string', 'hp1_pf:string', 'hp1_starter:string', 'hp2_name:string', 'hp2_min:string', 'hp2_pts:string', 'hp2_fgma:string', 'hp2_3pma:string', 'hp2_ftma:string', 'hp2_oreb:string', 'hp2_dreb:string', 'hp2_reb:string', 'hp2_ast:string', 'hp2_stl:string', 'hp2_blk:string', 'hp2_to:string', 'hp2_pf:string', 'hp2_starter:string', 'hp3_name:string', 'hp3_min:string', 'hp3_pts:string', 'hp3_fgma:string', 'hp3_3pma:string', 'hp3_ftma:string', 'hp3_oreb:string', 'hp3_dreb:string', 'hp3_reb:string', 'hp3_ast:string', 'hp3_stl:string', 'hp3_blk:string', 'hp3_to:string', 'hp3_pf:string', 'hp3_starter:string', 'hp4_name:string', 'hp4_min:string', 'hp4_pts:string', 'hp4_fgma:string', 'hp4_3pma:string', 'hp4_ftma:string', 'hp4_oreb:string', 'hp4_dreb:string', 'hp4_reb:string', 'hp4_ast:string', 'hp4_stl:string', 'hp4_blk:string', 'hp4_to:string', 'hp4_pf:string', 'hp4_starter:string', 'hp5_name:string', 'hp5_min:string', 'hp5_pts:string', 'hp5_fgma:string', 'hp5_3pma:string', 'hp5_ftma:string', 'hp5_oreb:string', 'hp5_dreb:string', 'hp5_reb:string', 'hp5_ast:string', 'hp5_stl:string', 'hp5_blk:string', 'hp5_to:string', 'hp5_pf:string', 'hp5_starter:string', 'hp6_name:string', 'hp6_min:string', 'hp6_pts:string', 'hp6_fgma:string', 'hp6_3pma:string', 'hp6_ftma:string', 'hp6_oreb:string', 'hp6_dreb:string', 'hp6_reb:string', 'hp6_ast:string', 'hp6_stl:string', 'hp6_blk:string', 'hp6_to:string', 'hp6_pf:string', 'hp6_starter:string', 'hp7_name:string', 'hp7_min:string', 'hp7_pts:string', 'hp7_fgma:string', 'hp7_3pma:string', 'hp7_ftma:string', 'hp7_oreb:string', 'hp7_dreb:string', 'hp7_reb:string', 'hp7_ast:string', 'hp7_stl:string', 'hp7_blk:string', 'hp7_to:string', 'hp7_pf:string', 'hp7_starter:string', 'hp8_name:string', 'hp8_min:string', 'hp8_pts:string', 'hp8_fgma:string', 'hp8_3pma:string', 'hp8_ftma:string', 'hp8_oreb:string', 'hp8_dreb:string', 'hp8_reb:string', 'hp8_ast:string', 'hp8_stl:string', 'hp8_blk:string', 'hp8_to:string', 'hp8_pf:string', 'hp8_starter:string', 'hp9_name:string', 'hp9_min:string', 'hp9_pts:string', 'hp9_fgma:string', 'hp9_3pma:string', 'hp9_ftma:string', 'hp9_oreb:string', 'hp9_dreb:string', 'hp9_reb:string', 'hp9_ast:string', 'hp9_stl:string', 'hp9_blk:string', 'hp9_to:string', 'hp9_pf:string', 'hp9_starter:string', 'hp10_name:string', 'hp10_min:string', 'hp10_pts:string', 'hp10_fgma:string', 'hp10_3pma:string', 'hp10_ftma:string', 'hp10_oreb:string', 'hp10_dreb:string', 'hp10_reb:string', 'hp10_ast:string', 'hp10_stl:string', 'hp10_blk:string', 'hp10_to:string', 'hp10_pf:string', 'hp10_starter:string', 'hp11_name:string', 'hp11_min:string', 'hp11_pts:string', 'hp11_fgma:string', 'hp11_3pma:string', 'hp11_ftma:string', 'hp11_oreb:string', 'hp11_dreb:string', 'hp11_reb:string', 'hp11_ast:string', 'hp11_stl:string', 'hp11_blk:string', 'hp11_to:string', 'hp11_pf:string', 'hp11_starter:string', 'hp12_name:string', 'hp12_min:string', 'hp12_pts:string', 'hp12_fgma:string', 'hp12_3pma:string', 'hp12_ftma:string', 'hp12_oreb:string', 'hp12_dreb:string', 'hp12_reb:string', 'hp12_ast:string', 'hp12_stl:string', 'hp12_blk:string', 'hp12_to:string', 'hp12_pf:string', 'hp12_starter:string', 'hp13_name:string', 'hp13_min:string', 'hp13_pts:string', 'hp13_fgma:string', 'hp13_3pma:string', 'hp13_ftma:string', 'hp13_oreb:string', 'hp13_dreb:string', 'hp13_reb:string', 'hp13_ast:string', 'hp13_stl:string', 'hp13_blk:string', 'hp13_to:string', 'hp13_pf:string', 'hp13_starter:string', 'ap1_name:string', 'ap1_min:string', 'ap1_pts:string', 'ap1_fgma:string', 'ap1_3pma:string', 'ap1_ftma:string', 'ap1_oreb:string', 'ap1_dreb:string', 'ap1_reb:string', 'ap1_ast:string', 'ap1_stl:string', 'ap1_blk:string', 'ap1_to:string', 'ap1_pf:string', 'ap1_starter:string', 'ap2_name:string', 'ap2_min:string', 'ap2_pts:string', 'ap2_fgma:string', 'ap2_3pma:string', 'ap2_ftma:string', 'ap2_oreb:string', 'ap2_dreb:string', 'ap2_reb:string', 'ap2_ast:string', 'ap2_stl:string', 'ap2_blk:string', 'ap2_to:string', 'ap2_pf:string', 'ap2_starter:string', 'ap3_name:string', 'ap3_min:string', 'ap3_pts:string', 'ap3_fgma:string', 'ap3_3pma:string', 'ap3_ftma:string', 'ap3_oreb:string', 'ap3_dreb:string', 'ap3_reb:string', 'ap3_ast:string', 'ap3_stl:string', 'ap3_blk:string', 'ap3_to:string', 'ap3_pf:string', 'ap3_starter:string', 'ap4_name:string', 'ap4_min:string', 'ap4_pts:string', 'ap4_fgma:string', 'ap4_3pma:string', 'ap4_ftma:string', 'ap4_oreb:string', 'ap4_dreb:string', 'ap4_reb:string', 'ap4_ast:string', 'ap4_stl:string', 'ap4_blk:string', 'ap4_to:string', 'ap4_pf:string', 'ap4_starter:string', 'ap5_name:string', 'ap5_min:string', 'ap5_pts:string', 'ap5_fgma:string', 'ap5_3pma:string', 'ap5_ftma:string', 'ap5_oreb:string', 'ap5_dreb:string', 'ap5_reb:string', 'ap5_ast:string', 'ap5_stl:string', 'ap5_blk:string', 'ap5_to:string', 'ap5_pf:string', 'ap5_starter:string', 'ap6_name:string', 'ap6_min:string', 'ap6_pts:string', 'ap6_fgma:string', 'ap6_3pma:string', 'ap6_ftma:string', 'ap6_oreb:string', 'ap6_dreb:string', 'ap6_reb:string', 'ap6_ast:string', 'ap6_stl:string', 'ap6_blk:string', 'ap6_to:string', 'ap6_pf:string', 'ap6_starter:string', 'ap7_name:string', 'ap7_min:string', 'ap7_pts:string', 'ap7_fgma:string', 'ap7_3pma:string', 'ap7_ftma:string', 'ap7_oreb:string', 'ap7_dreb:string', 'ap7_reb:string', 'ap7_ast:string', 'ap7_stl:string', 'ap7_blk:string', 'ap7_to:string', 'ap7_pf:string', 'ap7_starter:string', 'ap8_name:string', 'ap8_min:string', 'ap8_pts:string', 'ap8_fgma:string', 'ap8_3pma:string', 'ap8_ftma:string', 'ap8_oreb:string', 'ap8_dreb:string', 'ap8_reb:string', 'ap8_ast:string', 'ap8_stl:string', 'ap8_blk:string', 'ap8_to:string', 'ap8_pf:string', 'ap8_starter:string', 'ap9_name:string', 'ap9_min:string', 'ap9_pts:string', 'ap9_fgma:string', 'ap9_3pma:string', 'ap9_ftma:string', 'ap9_oreb:string', 'ap9_dreb:string', 'ap9_reb:string', 'ap9_ast:string', 'ap9_stl:string', 'ap9_blk:string', 'ap9_to:string', 'ap9_pf:string', 'ap9_starter:string', 'ap10_name:string', 'ap10_min:string', 'ap10_pts:string', 'ap10_fgma:string', 'ap10_3pma:string', 'ap10_ftma:string', 'ap10_oreb:string', 'ap10_dreb:string', 'ap10_reb:string', 'ap10_ast:string', 'ap10_stl:string', 'ap10_blk:string', 'ap10_to:string', 'ap10_pf:string', 'ap10_starter:string', 'ap11_name:string', 'ap11_min:string', 'ap11_pts:string', 'ap11_fgma:string', 'ap11_3pma:string', 'ap11_ftma:string', 'ap11_oreb:string', 'ap11_dreb:string', 'ap11_reb:string', 'ap11_ast:string', 'ap11_stl:string', 'ap11_blk:string', 'ap11_to:string', 'ap11_pf:string', 'ap11_starter:string', 'ap12_name:string', 'ap12_min:string', 'ap12_pts:string', 'ap12_fgma:string', 'ap12_3pma:string', 'ap12_ftma:string', 'ap12_oreb:string', 'ap12_dreb:string', 'ap12_reb:string', 'ap12_ast:string', 'ap12_stl:string', 'ap12_blk:string', 'ap12_to:string', 'ap12_pf:string', 'ap12_starter:string', 'ap13_name:string', 'ap13_min:string', 'ap13_pts:string', 'ap13_fgma:string', 'ap13_3pma:string', 'ap13_ftma:string', 'ap13_oreb:string', 'ap13_dreb:string', 'ap13_reb:string', 'ap13_ast:string', 'ap13_stl:string', 'ap13_blk:string', 'ap13_to:string', 'ap13_pf:string', 'ap13_starter:string', 'h_nick:string', 'a_nick:string', 'h_initials:string', 'a_initials:string', 'aq1:string', 'aq2:string', 'aq3:string', 'aq4:string', 'aq5:string', 'aq6:string', 'aq7:string', 'aq8:string', 'aq9:string', 'aq10:string', 'hq1:string', 'hq2:string', 'hq3:string', 'hq4:string', 'hq5:string', 'hq6:string', 'hq7:string', 'hq8:string', 'hq9:string', 'hq10:string', 'afgp:string', 'aftp:string', 'a3ptp:string', 'arebt:string', 'aastt:string', 'astlt:string', 'ablkt:string', 'hfgp:string', 'hftp:string', 'h3ptp:string', 'hrebt:string', 'hastt:string', 'hstlt:string', 'hblkt:string', 'awaytfgma:string', 'awaytftma:string', 'awayt3fgma:string', 'hometfgma:string', 'hometftma:string', 'homet3fgma:string', 'hometoreb:string', 'hometdreb:string', 'awaytoreb:string', 'awaytdreb:string', 'hometto:string', 'hometpf:string', 'awaytto:string', 'awaytpf:string'];
}