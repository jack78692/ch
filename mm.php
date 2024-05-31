<?php
// Array of URLs for .m3u8 files
$urls = array(
'https://satstorm.com/iptv2.m3u8',
    'https://i.mjh.nz/SamsungTVPlus/in.m3u8',
     'https://i.mjh.nz/SamsungTVPlus/us.m3u8',
      'https://i.mjh.nz/SamsungTVPlus/gb.m3u8',
            'https://i.mjh.nz/SamsungTVPlus/ca.m3u8',
            'https://i.mjh.nz/PlutoTV/us.m3u8',
            'https://i.mjh.nz/PlutoTV/gb.m3u8', 
             'https://i.mjh.nz/PlutoTV/ca.m3u8', 
                          'https://raw.githubusercontent.com/byte-capsule/FanCode-Hls-Fetcher/main/Fancode_Live.m3u', 

             

    
    // Add more URLs here as needed
);

// Initialize combined contents variable
$combined_contents = '';

// Loop through each URL
foreach ($urls as $url) {
    // Fetch the contents of the .m3u8 file
    $m3u8_contents = file_get_contents($url);

    // Append contents to combined contents
    $combined_contents .= $m3u8_contents;
}

// Save the combined contents to a local file
$combined_filename = 'combined_playlist.m3u8';
file_put_contents($combined_filename, $combined_contents);

// Output a message indicating the combined file has been saved
echo "Combined file saved as: $combined_filename";
?>
