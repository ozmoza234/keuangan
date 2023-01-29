<?php 

/**
 * SharedController Controller
 * @category  Controller / Model
 */
class SharedController extends BaseController{
	
	/**
     * pelunasan_nama_nasabah_option_list Model Action
     * @return array
     */
	function pelunasan_nama_nasabah_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT nama_nasabah AS value , nama_nasabah AS label FROM nasabah ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pelunasan_jumlah_pinjaman_option_list Model Action
     * @return array
     */
	function pelunasan_jumlah_pinjaman_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT jumlah_pinjaman AS value , jumlah_pinjaman AS label FROM pinjaman ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pinjaman_nama_nasabah_option_list Model Action
     * @return array
     */
	function pinjaman_nama_nasabah_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT nama_nasabah AS value , nama_nasabah AS label FROM nasabah ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tabungan_nama_nasabah_option_list Model Action
     * @return array
     */
	function tabungan_nama_nasabah_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT nama_nasabah AS value , nama_nasabah AS label FROM nasabah ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * tabungan_jumlah_pinjaman_option_list Model Action
     * @return array
     */
	function tabungan_jumlah_pinjaman_option_list(){
		$db = $this->GetModel();
		$sqltext = "SELECT DISTINCT jumlah_pinjaman AS value , jumlah_pinjaman AS label FROM pinjaman ORDER BY label ASC";
		$queryparams = null;
		$arr = $db->rawQuery($sqltext, $queryparams);
		return $arr;
	}

	/**
     * pengguna_username_value_exist Model Action
     * @return array
     */
	function pengguna_username_value_exist($val){
		$db = $this->GetModel();
		$db->where("username", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * pengguna_email_value_exist Model Action
     * @return array
     */
	function pengguna_email_value_exist($val){
		$db = $this->GetModel();
		$db->where("email", $val);
		$exist = $db->has("pengguna");
		return $exist;
	}

	/**
     * getcount_nasabah Model Action
     * @return Value
     */
	function getcount_nasabah(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM nasabah";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pinjaman Model Action
     * @return Value
     */
	function getcount_pinjaman(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pinjaman";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_tabungan Model Action
     * @return Value
     */
	function getcount_tabungan(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM tabungan";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pelunasan Model Action
     * @return Value
     */
	function getcount_pelunasan(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pelunasan";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

	/**
     * getcount_pengguna Model Action
     * @return Value
     */
	function getcount_pengguna(){
		$db = $this->GetModel();
		$sqltext = "SELECT COUNT(*) AS num FROM pengguna";
		$queryparams = null;
		$val = $db->rawQueryValue($sqltext, $queryparams);
		
		if(is_array($val)){
			return $val[0];
		}
		return $val;
	}

}
