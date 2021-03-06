<?php
    $breadcrumbs = array
    (
        'Download' => 'download.php',
        'SFML 2.2' => 'download/sfml/2.2'
    );
    include('../../../header.php');

    function download_link($compiler, $arch, $size, $link)
    {
        $counter_script = "_gaq.push(['_trackEvent', 'Download', 'SFML 2.2']);";
        echo '<span class="description">' . $compiler . ' - ' . $arch . '</span><a href="' . $link . '" onclick="' . $counter_script . '">Download<span class="size">' . $size . ' MB</span></a>';
    }
?>

<h1>Download SFML 2.2</h1>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="6">Windows</td>
            <td><?php download_link('Visual C++ 10 (2010)', '32-bit', '10.1', '../../../files/SFML-2.2-windows-vc10-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 10 (2010)', '64-bit', '9.7', '../../../files/SFML-2.2-windows-vc10-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 11 (2012)', '32-bit', '11.4', '../../../files/SFML-2.2-windows-vc11-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 11 (2012)', '64-bit', '12.7', '../../../files/SFML-2.2-windows-vc11-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('Visual C++ 12 (2013)', '32-bit', '10.9', '../../../files/SFML-2.2-windows-vc12-32-bit.zip') ?></td>
            <td><?php download_link('Visual C++ 12 (2013)', '64-bit', '12.1', '../../../files/SFML-2.2-windows-vc12-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 4.7.1 TDM (SJLJ)', '32-bit', '9.3', '../../../files/SFML-2.2-windows-gcc-4.7.1-tdm-32-bit.zip') ?></td>
            <td><?php download_link('GCC 4.7.1 TDM (SJLJ)', '64-bit', '11.8', '../../../files/SFML-2.2-windows-gcc-4.7.1-tdm-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 4.8.1 TDM (SJLJ)', '32-bit', '9.2', '../../../files/SFML-2.2-windows-gcc-4.8.1-tdm-32-bit.zip') ?></td>
            <td><?php download_link('GCC 4.8.1 TDM (SJLJ)', '64-bit', '10.5', '../../../files/SFML-2.2-windows-gcc-4.8.1-tdm-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td><?php download_link('GCC 4.9.2 MinGW (DW2)', '32-bit', '9.3', '../../../files/SFML-2.2-windows-gcc-4.9.2-mingw-32-bit.zip') ?></td>
            <td><?php download_link('GCC 4.9.2 MinGW (SEH)', '64-bit', '10.0', '../../../files/SFML-2.2-windows-gcc-4.9.2-mingw-64-bit.zip') ?></td>
        </tr>
        <tr>
            <td class="notice" colspan="3">
                On Windows, choosing 32 or 64-bit libraries should be based on which platform you want to compile for, not which OS you have. Indeed, you can perfectly
                compile and run a 32-bit program on a 64-bit Windows. So you'll most likely want to target 32-bit platforms, to have the largest possible audience.
                Choose 64-bit packages only if you have good reasons.
            </td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="1">Linux</td>
            <td><?php download_link('GCC', '32-bit', '1.75', '../../../files/SFML-2.2-linux-gcc-32-bit.tar.gz') ?></td>
            <td><?php download_link('GCC', '64-bit', '1.90', '../../../files/SFML-2.2-linux-gcc-64-bit.tar.gz') ?></td>
        </tr>
        <tr>
            <td class="notice" colspan="3">
                On Linux, if you have a 64-bit OS then you have the 64-bit toolchain installed by default. Compiling for 32-bit is possible, but you have to install
                specific packages and/or use specific compiler options to do so. So downloading the 64-bit libraries is the easiest solution if you're on a 64-bit Linux.
            </td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="3">Mac OS X</td>
            <td><?php download_link('Clang', 'universal 32+64-bit (OS X 10.7+, compatible with C++11 and libc++)', '6.3', '../../../files/SFML-2.2-osx-clang-universal.tar.gz') ?></td>
        </tr>
        <tr>
            <td class="notice" colspan="3">
                Mac OS X libraries are universal, they contain both the 32 and 64-bit versions of SFML and can therefore be used for both 32 and 64-bit builds.
            </td>
        </tr>
    </tbody>
</table>

<table class="styled download">
    <tbody>
        <tr>
            <td class="os" rowspan="2">All</td>
            <td><span class="description">Source code</span><a href="../../../files/SFML-2.2-sources.zip">Download<span class="size">17.22 MB</span></a></td>
        </tr>
        <tr>
            <td><span class="description">HTML Documentation</span><a href="../../../files/SFML-2.2-doc.zip">Download<span class="size">1.44 MB</span></a></td>
        </tr>
    </tbody>
</table>

<?php
    require("../../../footer.php");
?>
