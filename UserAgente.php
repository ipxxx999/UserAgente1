<?php
// Script escrito por ipxxx999 https://github.com/ipxxx999/UserAgente1/edit/main/UserAgente.php
// VIDEO GUIDE - 
// ----------------------------------------------------------------------------------------
// Obtain user agent which is a long string not meant for human reading
$agent = $_SERVER['HTTP_USER_AGENT']; 
// Get the user Browser now -----------------------------------------------------
// Create the Associative Array for the browsers we want to sniff out
$browserArray = array(
        'Windows Mobile'            => 'IEMobile',
        'Vivaldi'                   => 'Vivaldi',
	'Android Mobile'            => 'Android',
	'iPhone Mobile'             => 'iPhone',
	'Firefox'                   => 'Firefox',
        'Chrome o Vivaldi'          => 'Chrome',
        'Internet Explorer'         => 'MSIE',
        'Opera'                     => 'Opera',
        'Safari'                    => 'Safari',
        'motorola'                  => 'Motorola',        
        'nokia'                     => 'Nokia',        
        'palm' 	                    => 'Palm',        
        'iphone'                    => 'Apple iPhone',        
        'ipad' 	                    => 'iPad',        
        'ipod' 	                    => 'Apple iPod Touch',        
        'sony' 	                    => 'Sony Ericsson',        
        'ericsson'                  => 'Sony Ericsson',        
        'blackberry'                => 'BlackBerry',        
        'cocoon'                    => 'O2 Cocoon',        
        'blazer'                    => 'Treo',        
        'lg' 	                    => 'LG',        
        'amoi' 	                    => 'Amoi',        
        'xda' 	                    => 'XDA',        
        'mda' 	                    => 'MDA',        
        'vario'                     => 'Vario',        
        'htc' 	                    => 'HTC',        
        'samsung'                   => 'Samsung',        
        'sharp'                     => 'Sharp',        
        'sie-' 	                    => 'Siemens',        
        'alcatel'                   => 'Alcatel',        
        'benq' 	                    => 'BenQ',        
        'ipaq' 	                    => 'HP iPaq',        
        'mot-' 	                    => 'Motorola',        
        'playstation portable'      => 'PlayStation Portable',        
        'hiptop'                    => 'Danger Hiptop',        
        'nec-' 	                    => 'NEC',        
        'panasonic'                 => 'Panasonic',        
        'philips'                   => 'Philips',        
        'sagem' 	            => 'Sagem',        
        'sanyo' 	            => 'Sanyo',        
        'spv' 	                    => 'SPV',        
        'zte' 	                    => 'ZTE',        
        'sendo' 	            => 'Sendo',        
        'obigo'                     => 'Obigo',        
        'netfront'	            => 'Netfront Browser',        
        'openwave'	            => 'Openwave Browser',        
        'mobilexplorer'             => 'Mobile Explorer',        
        'operamini'	            => 'Opera Mini',        
        'opera mini'	            => 'Opera Mini',        
        'digital paths'	            => 'Digital Paths',        
        'avantgo'	            => 'AvantGo',        
        'xiino'		            => 'Xiino',        
        'novarra'	            => 'Novarra Transcoder',        
        'vodafone'	            => 'Vodafone',        
        'docomo'	            => 'NTT DoCoMo',        
        'o2'		            => 'O2',        
        'mobile'                    => 'Generic Mobile',        
        'wireless'                  => 'Generic Mobile',        
        'j2me'                      => 'Generic Mobile',        
        'midp'                      => 'Generic Mobile',        
        'cldc'                      => 'Generic Mobile',        
        'up.link'                   => 'Generic Mobile',        
        'up.browser'                => 'Generic Mobile',        
        'smartphone'                => 'Generic Mobile',        
        'cellphone'                 => 'Generic Mobile',        
); 
foreach ($browserArray as $k => $v) {
    if (preg_match("/$v/", $agent)) {
         break;
    }	else {
	 $k = "Navegador Desconocido";
    }
} 
$browser = $k;
// Get the user OS now ------------------------------------------------------------
// Create the Associative Array for the Operating Systems to sniff out
$osArray = array(
        'Windows 98'          => '(Win98)|(Windows 98)',
        'Windows 2000'        => '(Windows 2000)|(Windows NT 5.0)',
	'Windows ME'          => 'Windows ME',
        'Windows XP'          => '(Windows XP)|(Windows NT 5.1)',
        'Windows Vista'       => 'Windows NT 6.0',
        'Windows 7'           => '(Windows NT 6.1)|(Windows NT 7.0)',
        'Windows NT 4.0'      => '(WinNT)|(Windows NT 4.0)|(WinNT4.0)|(Windows NT)',
	'Linux'               => '(X11)|(Linux)',
        'Mac OS'              => '(Mac_PowerPC)|(Macintosh)|(Mac OS)',
        'windows nt 6.0'      => 'Windows Longhorn',
	'windows nt 5.2'      => 'Windows 2003',
	'windows nt 5.0'      => 'Windows 2000',
	'windows nt 5.1'      => 'Windows XP',
	'windows nt 4.0'      => 'Windows NT 4.0',
	'winnt4.0'            => 'Windows NT 4.0',
	'winnt 4.0'           => 'Windows NT',
	'winnt'	              => 'Windows NT',
	'windows 98'          => 'Windows 98',
	'win98'	              => 'Windows 98',
	'windows 95'          => 'Windows 95',
        'win95'               => 'Windows 95',
        'os x'                => 'Mac OS X',
        'ppc mac'             => 'Power PC Mac',
	'freebsd'             => 'FreeBSD',
	'ppc'                 => 'Macintosh',
	'linux'               => 'Linux',
	'debian'              => 'Debian',
	'sunos'               => 'Sun Solaris',
	'beos'                => 'BeOS',
	'apachebench'         => 'ApacheBench',
	'aix'                 => 'AIX',
	'irix'                => 'Irix',
	'osf'                 => 'DEC OSF',
	'hp-ux'               => 'HP-UX',
	'netbsd'              => 'NetBSD',
	'bsdi'                => 'BSDi',
	'openbsd'             => 'OpenBSD',
        'gnu'                 => 'GNU Linux',
        'unix'                => 'Unknown Unix OS',
); 
foreach ($osArray as $k => $v) {
    if (preg_match("/$v/", $agent)) {
         break;
    }	else {
	 $k = "Sistema Operativo Desconocido";
    }
} 
$os = $k;
// At this point you can do what you wish with both the OS and browser acquired
echo '<h2>Estas usando:</h2> User-Agent:';  
echo "<br>";
echo $agent;
echo "<h2>Estas usando: <em> $browser en $os</em></h2>";
?>
