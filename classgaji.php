<?php

abstract class pegawai
{
	protected $nama;
	protected $nip;
	protected $alamat;
	
	function __construct($nama,$nip,$alamat)
	{
		$this -> nama = $nama;
		$this -> nip = $nip;
		$this -> alamat = $alamat;
	}

	function getNama()
	{
		return $this -> nama;
	}

	function getNip()
	{
		return $this -> nip;
	}

	function getAlamat()
	{
		return $this -> alamat;
	}
}

class dosen extends pegawai
{
	private $totaldosen;
	
	function gajidosen($sks)
	{
		$this -> totaldosen = 1500000 * $sks;
	}

	function getTotaldosen()
	{
		return $this -> totaldosen ;
	}
}

class staff extends pegawai
{
	private $totalstaff;
	
	function gajistaff($hari)
	{
		$this -> totalstaff = 1500000 * $hari;
	}

	function getTotalstaff()
	{
		return $this -> totalstaff ;
	}
}
?>