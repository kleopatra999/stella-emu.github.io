<!doctype html public "-//w3c//dtd html 4.0 transitional//en">
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
		<title>Stella: &quot;A Multi-Platform Atari 2600 VCS Emulator&quot;</title>
		<link href="cssscreen.css" rel="stylesheet" media="screen">
		<link href="cssprint.css" rel="stylesheet" media="print">
	</head>
	<body id="news">
		<div class="rightcolumn">
			<div class="header"><?php include("header.php"); ?></div>
			<div class="content">

<!---------------------------------------------------------------->
<H4>October 11, 2015</H4>
Stella release 4.6.6 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added 'Alt/Cmd + j' shortcut key and 'tv.jitter' commandline argument
    to toggle the TV scanline jittering emulation added in the last
    release.  Also, this jittering now defaults to off.</li>

<li>Fixed bug in 'MDM' bankswitch scheme; bankswitching wasn't being
    done under certain circumstances.</li>
</ul>

-Have fun!


<H4>September 26, 2015</H4>
Stella release 4.6.5 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added mappable events for toggling TV color/BW, left difficulty A/B
    and right difficulty A/B.  This means that one key, joystick button,
    etc. can be used to toggle each event.  Thanks to Buzbard of AtariAge
    for the suggestion.</li>

<li>Added ability to edit values in more widgets in the debugger.  For
    now, this applies mainly to the various decimal and binary fields.
    More widgets will be made editable in future releases.</li>

<li>The TIA now emulates the jitter that occurs when scanline counts
    are not consistent frame-over-frame.  Also, the DPC+ scheme now
    emulates jitter that can occur when using its Fractional Datafetchers
    if the DFxFRACINC registers are not re-initialized every frame.
    Special thanks to SpiceWare for this implementation.</li>

<li>Tweaked 'MDM' scheme autodetection to detect that the identification
    string can be in either bank 0 or bank 1.</li>

<li>Changed 'hidecursor' commandline argument (and associated UI item) to
    'cursor'.  The new argument allows to set mouse cursor visibility
    separately for both UI and emulation modes.</li>

<li>Fixed snapshot bug most noticeable in MacOSX, where taking a snapshot
    of a TIA image sometimes left parts of the UI onscreen (and in the
    resulting picture).</li>

<li>Fixed memory leak; the game console wasn't being closed after exiting
    a ROM.</li>

<li>For the Windows port: added an application icon for Stella in the
    Control Panel "Add/Remove Programs" list.</li>

<li>For the OSX port: Updated build scripts to be compatible with Xcode 7.</li>

<li>Updated included PNG library to latest stable version.</li>

</ul>


<H4>April 22, 2015</H4>
Stella release 4.6.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed bug whereby text input could not be entered in certain widgets
    in the debugger.</li>

<li>Updated UNIX configure script to work with GCC 5.x compilers.</li>
</ul>


<H4>March 21, 2015</H4>
Stella release 4.6 for Linux, MacOS X and Windows is now available.
<ul>
<li>Finally fixed fullscreen rendering issues on some OpenGL
    implementations in Linux (mostly Intel-specific).  Basically, the
    concept of 'dirty updates' has been removed; the window is now
    updated continuously.  This may also fix issues some people were
    having with triple-buffering in Windows Direct3D, etc.</li>

<li>Fixed sound corruption that happened when running a ROM for the
    first time.  This was most obvious under OSX, but occasionally
    happened on other systems too.</li>

<li>Reverted some minor C++11 features (std::regex and cbegin/cend
    iterators) in a few places, since otherwise GCC 4.9 is required to
    compile Stella, and it isn't available on many systems yet.  These
    changes allow Stella to be built with GCC 4.8, which is present in
    the latest 'long term release' of Ubuntu.</li>

<li>Fixed error messages on state loading; sometimes multiple messages
    were being added together and displayed.</li>

<li>Fixed bug when running ROMs using AtariVox controllers; the app would
    crash upon exiting the ROM.</li>

<li>Snapshot functionality now works while the emulation is paused.</li>

<li>Certain textfields in the UI now have filtering enabled, preventing
    insertion of illegal characters.  This will be extended throughout
    the code in future releases.</li>

<li>DataGridWidgets in the debugger now respond to keypad '+' and '-'.</li>

<li>Updated included PNG library to latest stable version.</li>
</ul>


<H4>January 1, 2015</H4>
Stella release 4.5 for Linux, MacOS X and Windows is now available.
<ul>
<li>The conversion to C++11 has begun :)  From this point on, to build
    Stella you will need a C++11 compatible compiler (Visual Studio 2013,
    Clang 3.3, gcc 4.9, Xcode 6, etc).  Eventually, this will bring more
    bug-free and (hopefully) faster code.</li>

<li>Fixed major bug with joysticks, where mapping was being lost on reset,
    the app would crash when plugging/unplugging certain sticks, etc.</li>

<li>Fixed major (but rare) crash that could occur when state files were
    zero'ed or corrupted.</li>

<li>Added dialog which shows the internal joystick database (all the
    joysticks that Stella knows about) and the ability to remove
    (currently unplugged) joysticks from this database.</li>

<li>Added preliminary support for 'WD' (Wickstead Design) bankswitching
    scheme, used for a previously unreleased prototype ROM.</li>

<li>Improved ZIP file handling, so that it now works as a normal
    filesystem does (it properly shows nested files and directories).</li>

<li>The debugger 'reset' command now does a complete system reset,
    instead of simply setting the PC to the reset vector address.</li>

<li>The 'listdelay' command now accepts a value of zero, indicating that
    list-skipping (jumping to a line in a list by keypress) is disabled.</li>

<li>The 'ctrlcombo' command now has a GUI item, allowing it to be changed
    from within the application.</li>

<li>Added 'Shift-Alt/Shift-Cmd s' keyboard shortcut, to enable continuous
    snapshot mode for each frame.  This is really only useful if you
    save snapshots in 1x mode; using it in high-resolution mode is
    not recommended.  Special thanks to SvOlli for the idea and code.</li>

<li>The minimum supported version for the OSX port is now OSX 10.7.
    Because of this, the 32-bit version is also discontinued, as 10.7
    supports 64-bit Intel only apps.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 10
    (thanks go to RomHunter for his tireless research in this area).
    Related to this, updated the snapshot collection.</li>

<li>Updated included PNG library to latest stable version.
</ul>


<H4>October 28, 2014</H4>
Stella release 4.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>Text input from non-US keyboard layouts is now supported.  Note that
    all text in Stella is still ASCII-only, but at least it can now be
    entered using a native layout.</li>

<li>Related to the text input changes, the debugger Alt-combo shortcuts
    have been changed; they now use the same key but with Control instead
    of Alt (Control-F for frame advance, etc).</li>

<li>Controllers are now detected dynamically by Stella.  This means that
    you can plug/unplug joysticks/paddles/etc while Stella is running,
    and they will be added and removed automatically.  Also fixed is
    a bug whereby sometimes custom joystick mappings weren't being saved.</li>

<li>The 'cpurandom' option is now broken down by register type, so you
    can selectively enable/disable randomization for each one.  The
    default is to disable randomization for all registers.</li>

<li>Fixed 'MDM' scheme to trigger bankswitching on writes to hotspots
    (previously it only triggered on reads).  Also, the scheme has been
    modified as originally designed by E. Blink; hotspots are now in the
    range $800-$BFF instead of $800-$FFF.</li>

<li>The OSX app-icon now includes 32x32 and 16x16 versions, so 'small'
    icons will be viewable in 'Finder', 'Get Info', etc.</li>

<li>The Linux port now uses an app-icon; this seems to be needed for
    some window managers.</li>
</ul>


<H4>September 14, 2014</H4>
Stella release 4.1.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Re-added 'uipalette' option due to popular demand (of at least one
    person :)).</li>

<li>Fixed bug in Windows port where pressing 'Alt' key combos resulted in
    an annoying system beep.  Currently this is fixed by patching the SDL2
    library and including a modified version with Stella.</li>
</ul>


<H4>September 1, 2014</H4>
Stella release 4.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Improved 'DASH' bankswitching scheme support; there is now a debugger
    tab for changing banks and viewing internal cart RAM, and
    autodetection is now implemented.</li>

<li>Added 'MDM' (Menu Driven Megacart) bankswitch scheme as described on
    AtariAge and originally developed by Edwin Blink.</li>

<li>Improved snapshot viewing in the ROM launcher; snapshots are now
    scaled to the available space, and can better accommodate sizes
    other than those generated by Stella itself.</li>

<li>Improved support on multi-monitor systems.  Stella will now use the
    same monitor for fullscreen-windowed mode switches.  Special thanks
    to Magnus Lind for patches that added this functionality.</li>

<li>Removed the 'bank' command from the debugger prompt, as it only worked
    (inconsistently) with certain bankswitch types.  The bankswitch UI
    should now be used to query/set bank state.</li>

<li>Fixed bug in disassembly output; instructions at $F000 were never
    being highlighted during execution.</li>

<li>The UNIX configure script now supports newer versions of Hurd.
    Special thanks to Stephen Kitt for the patch.</li>
</ul>


<H4>July 1, 2014</H4>
Stella release 4.0 for Linux, MacOS X and Windows is now available.
<ul>
<li>Ported Stella to SDL2, which brings many new features.  Among the
    largest improvements is native hardware acceleration support for
    Windows (Direct3D) and Linux/OSX (OpenGL).  It is also now possible
    to port Stella to iOS and Android devices using OpenGLES.
    Hardware acceleration is now required, which means up-to-date drivers
    are needed.  Software rendering is still present, but is somewhat
    unoptimized and unsupported going forward.

<li>Fullscreen video modes now use the desktop resolution.  Switching
    to fullscreen and back to windowed mode no longer rearranges icons
    on your desktop.

<li>TIA TV effects are now available in all video modes, since hardware
    acceleration is a requirement.

<li>Added a much more detailed view of cart extended RAM to a new
    debugger tab.  Special thanks to SpiceWare for this implementation.

<li>Added preliminary support for 'DASH' bankswitching scheme by A. Davie.

<li>The AtariVox and SaveKey controllers now have the ability in the
    debugger to completely erase the virtual EEPROM data.

<li>Added 'savesnap' debugger prompt command, and also associated
    context menu item to the debugger TIA output area.  This saves the
    current TIA image to a PNG file.

<li>Added 'hidecursor' commandline option, which allows to completely
    disable showing the mouse cursor (useful on systems that don't have
    a mouse).

<li>Removed 'uipalette' option, as the original palette is no longer
    supported.

<li>Updated included PNG library to latest stable version.
</ul>


<H4>January 20, 2014</H4>
Stella release 3.9.3 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added bankswitch schemes BF, BFSC, DF, DFSC and 4KSC, thanks to
    RevEng and CPUWIZ of AtariAge.</li>

<li>Updated ROM properties for several ROMs, thanks to Omegamatrix of
    AtariAge.</li>

<li>Fixed program crash when specifying a bankswitch type that Stella
    didn't recognize; an error message is now displayed.</li>
</ul>


<H4>August 31, 2013</H4>
Stella release 3.9.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>Improved parsing of the DASM lst file for the debugger disassembly;
    it sometimes missed constant declarations.</li>

<li>Changed 'usemouse' argument from a true/false option to accept
    'always', 'analog' and 'never'.  This allows to use the mouse as a
    controller under more specific circumstances.  The default is
    'analog', which means the mouse is only used to emulate analog-like
    devices (paddles, trackball, etc).</li>

<li>Added ability to use bold fonts within the debugger window, which can
    be set with the 'dbg.fontstyle' commandline argument as well as in the
    debugger UI Settings dialog.  This is useful for those that find the
    current font too narrow.</li>

<li>Renamed 'debuggerres' argument to 'dbg.res'.  All future debugger-
    specific options will start with 'dbg.'.</li>

<li>The TIA 'zoom' area in the debugger now supports scrolling the
    mouse wheel (currently up/down only, as I don't have a sideways
    scrolling mouse to test with).</li>
</ul>


<H4>August 21, 2013</H4>
Stella release 3.9.1 for Linux, MacOS X and Windows is now available.
<ul>
  <li><b>Note: because of TIA/6502 changes, the state file format has changed
         again, and old state files will not work with this release.</b></li>

<li>Several bugfixes and improvements to the debugger:
  <ul>
    <li>Improved display of debugger when using larger video modes.  There
        are now three font sizes, which are automatically selected when
        the debugger is sized accordingly.  When using larger fonts, the
        extra space is now used more efficiently.</li>

    <li>Fixed bug in disassembly when the mirror used for the current
        PC didn't match the mirror for the current bank.  In this case,
        the disassembler became confused and didn't properly track the
        PC address.</li>

    <li>Fixed bug in display of current TIA frame number in the UI;
        depending on how breakpoints were set, it was sometimes off by
        one.</li>

    <li>Fixed RAM widget Search/Compare textboxes; entering any data and
        then pressing 'Enter' / clicking 'OK' locked the UI until exiting
        and re-entering the debugger.</li>

    <li>Changed display for various TIA position counters to decimal
        (from hex) in the TIA tab.  Related to this, all data input
        widgets in the UI now have the ability to enter binary,
        decimal or hex values by using the proper leading character
        (\, #, $, respectively).</li>

    <li>Added 'INTIM Clks' to the 'I/O' tab. which shows the number of
        clocks between each 'step' of the INTIM timer.</li>

    <li>Added ability to modify 'tiadriven' commandline argument to the
        'TIA' tab, and 'ramrandom' to the 'I/O' tab.  These options were
        available for quite some time, but they weren't exposed in the UI.</li>

    <li>Added 'cpurandom' commandline argument, and associated UI item
        to the 'I/O' tab.  This works similar to 'ramrandom', and
        randomizes the contents of the CPU registers on ROM startup.</li>

    <li>Added 'uhex' debugger prompt command, which toggles all
        hexadecimal display between upper/lower case.  This setting is
        also saved in the settings file as argument 'dbg.uhex'.</li>

    <li>Removed 'loadsym' command from the debugger prompt, since the
        DASM symbol file is always loaded anyway, making the command
        redundant.  Related to this, fixed loading symbols with
        ###.name convention; the leading number is now stripped.</li>

    <li>Added support for DASM lst files (created with the -l option).
        For now, the contents are only partially used, to detect
        constants vs. symbolic addresses in the symbol file.  Eventually,
        further information from the lst file may be used.</li>

    <li>The GRPx and PFx registers in the TIA output now show inactive
        background pixels as either blanked or with the underlying object
        colour, instead of always being black.   This gives a more accurate
        representation of how the registers are actually drawn onscreen.
        Thanks to Tjoppen of AtariAge for this idea and sample code.</li>

    <li>The 'Source Address' locations for the CPU registers now show
        labels where appropriate.</li>
  </ul>
</li>

<li>Renamed 'Override properties' dialog (accessible from the ROM
    launcher by a right-mouse-button click) to 'Power-on options', with
    the following new options:
  <ul>
    <li>Set start-up state for both joysticks as well as console select/
        reset buttons.  Related to this, added 'holdjoy01' and 'holdjoy1'
        commandline arguments, and removed 'holdbutton0' argument.</li>

    <li>The ability to load the ROM directly from this dialog, after
        changing any settings, and also to start in the debugger.</li>

    <li>Added more detailed information as to how to use this
        functionality to the UI.</li>

    <li>Buttons held down are reset approx. 0.5 seconds after starting
        the ROM, to simulate pressing and releasing the buttons on a
        real console.</li>
  </ul>
</li>

<li>Fixed bug when using event remapping; changes were being saved only
    when launching a ROM from the launcher, not in standalone mode.</li>

<li>Improved bankswitch autodetection for newer EF and EFSC ROMs
    generated by batari Basic, thanks to RevEng of AtariAge.</li>

<li>Added properties database info for "Princess Rescue" ROM.</li>

<li>For the Linux/UNIX port:
  <ul>
    <li>Fixed bug whereby a maximize button was always present in the
        window title bar.  Stella could not be expanded in this way,
        so the button was removed.</li>

    <li>Added Startup notification protocol patch to the .desktop
        file from Dan Fandrich.</li>
  </ul>
</li>

<li>Updated included PNG library to latest stable version.</li>
</ul>


<H4>June 27, 2013</H4>
Stella release 3.9 for Linux, MacOS X and Windows is now available.
<ul>
<li>Greatly extended functionality of the debugger disassembly:
  <ul>
      <li>There is now a new tab which lists information specific to the
        cartridge bankswitching scheme in use.  This includes the ability
        to modify internal state even for esoteric ROMs which don't
        follow the standard layout of 4K per bank.</li>

      <li>The debugger now generates DASM-compatible disassembled code,
        which can be saved to an external file.  This disassembly is
        based on both a static and runtime analysis, and is extremely
        accurate.  It also automatically differentiates between
        CODE/PGFX/GFX/DATA/ROW areas, whereas normal Distella
        only differentiates between CODE/GFX/ROW.  For now, only
        single-bank (4K and smaller) ROMs are supported; support for
        multi-bank ROMs will come in a future release.</li>

      <li>The disassembly now recognizes various TIA/RIOT read/write
        mirrors, and marks them as such (for example, INPT4|$30 instead
        of INPT4 for address $3C).  Special thanks to Omegamatrix for
        sample code and idea for this feature.</li>

      <li>ROMS less than 2K in size (so called 'Sub2K' ROMs) now show only
        the actual data in the binary.  This means, for example, that a
        256 byte ROM will show only 256 bytes in the disassembly, instead
        of padding duplicated data to 2K boundary.</li>

      <li>Fixed bug when entering patched bytes; the current number base
        wasn't being used.</li>

      <li>Fixed labelling in ROW directives; it wasn't accurately setting
        a label in the case where it occurred in the middle of the data.</li>

      <li>Added a new dialog for changing Distella settings, located by
        right-clicking the disassembly code.</li>

      <li>The commandline option 'dis.resolvedata' has been renamed to
        'dis.resolve', with new usage (see manual for further details).</li>
    </ul></li>

<li>Fixed regression in handling ZIP files (as compared to version 3.7.5)
    created with newer versions of the ZIP program.  Related to this, added
    better error messages for invalid/missing/unreadable ROM files.</li>

<li>Added 'snapname' commandline argument and associated UI item, for
    specifying whether snapshots should be saved using either the internal
    ROM database name or the actual ROM filename.  This feature was
    present in older releases of Stella, and due to popular demand it's
    now back again.  Related to this, added a new dialog specifically for
    the numerous snapshot-related items.</li>

<li>Fixed bug in Linux/OSX versions when starting Stella for the first
    time; it was previously creating mislabeled directories to store
    settings, snapshots, etc.</li>

<li>Fixed redundant "New console created" message when entering the same
    ROM multiple times from the ROM launcher.</li>

<li>Updated profile database for "BasketBall" ROMs; the joysticks are now
    swapped by default, which allows one and two-player games to work
    correctly.</li>

<li>SuperCharger/AR ROMs now ignore the 'ramrandom' setting, and start with
    RAM containing all zeroes.  This seems to fix issues with Dragonstomper
    always starting in exactly the same state.</li>

<li>Fixed issue when debugging CompuMate ROMs; keystrokes entered while
    debugging would be interpreted as typing on the CompuMate keyboard.</li>

<li>Changed colour of the 'current PC indicator' in the debugger to
    match the one used for line selection.  This makes it easier to
    see for those with problems seeing lighter colours.</li>

<li>Improved functionality of the various pop-up dialogs and context
    menus in the UI; they can now be navigated more fully by the keyboard
    and mouse.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 9
    (thanks go to RomHunter for his tireless research in this area).
    Related to this, updated the snapshot collection.</li>

<li>Updated included PNG and ZLIB libraries to latest stable version.</li>
</ul>


<H4>March 13, 2013</H4>
The Subversion repository used by Stella has been changed.  All developers
will need to checkout again from trunk, or relocate their current directory
to the new system.


<H4>March 3, 2013</H4>
Stella release 3.8.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added support for TIA RSYNC writes, thanks to Omegamatrix of AtariAge.
    This allows the recently released "Extra Terrestrials" ROM to run, as
    well as improving emulation of "Fatal Run" and several other test ROMs.</li>

<li>Fixed typo in TIA HMOVE writes, thanks to Thomas Jentzsch.  This fixes
    the constant collision issues in "Kool-Aid Man", and several other
    homebrew ROMs.</li>

<li>Fixed sound issues on OSX PPC machines (all sound was in little-endian
    format, but PPC is big-endian).</li>

<li>The OSX DMG archive now contains proper modification dates.</li>
</ul>


<H4>February 23, 2013</H4>
Added an expanded explanation for first-time developers to the
<a href="development.php"><B>Development</B></a> section of the Stella webpage.

<H4>February 21, 2013</H4>
Stella release 3.8 for Linux, MacOS X and Windows is now available.
<ul>
<li>Huge changes to the sound system:
  <ul>
    <li>The sound code now uses 16-bit signed samples instead of 8-bit
        unsigned samples, making it more compatible with a wider variety of
        systems.</li>
    <li>Improved sound output for several ROMs, including "Space Rocks"
        (the 'heartbeat' sound can now be clearly heard).</li>
    <li>The 'volume clipping' option has been removed, since in 16-bit
        mode it's no longer needed.</li>
    <li>The 'Tia freq' option has been removed.</li>
    <li>Selecting more common sample rates (other than 31400) now works
        much better, but there are still a few ROMS (like Quadrun) where
        31400Hz still works best.</li>
  </ul>
</li>

<li>Many changes to handling ZIP archives:
  <ul>
    <li>Files in multiple levels are now recognized.  This fixes issues
        in Windows where such files couldn't be loaded at all, and in all
        systems where ROMs with the same name (but in different
        directories) weren't being recognized.</li>
    <li>ZIP contents are now handled more intelligently.  Archives
        containing only one ROM are automatically loaded, whereas those
        with multiple files are treated as directories.</li>
    <li>Opening an archive from the commandline now works as in the UI,
        where opening a multi-ROM archive will pop up the UI and show the
        archive contents (as a directory).</li>
    <li>The ZIP code behind the scenes is now much faster by making use
        of caching (the old code was actually from 1998!).</li>
    <li>This new 'archive' infrastructure may eventually lead to 7-Zip
        support, as well as 'virtual' formats (such as showing the list
        of files for 2in1/4in1/8in1/etc within the UI).</li>
  </ul>
</li>

<li>Improved bankswitch autodetection for FA2 ROMs; 29K and 32K versions
    (meant for Harmony cart) are now recognized.</li>

<li>Improved bankswitch autodetection for X07 ROMs (although there's only
    two known ROMs in existence, so the detection probably isn't robust).</li>

<li>Tweaked bankswitch autodetection for the 0840, F8 and FE schemes;
    several homebrews that didn't run before now work correctly.</li>

<li>Fixed regression in RIOT INTIM reads; at least one known ROM
    (Mr. Roboto Berzerk hack) wasn't working properly.</li>

<li>Fixed bug in the debugger with RIOT INTIM/TIMINT display; reads
    were being done multiple times, changing the state of the
    registers and resulting in incorrect emulation.</li>

<li>Worked around bug in debugger disassembly of zero-page RAM; for now,
    the resolving of address vs. data sections is turned off in such a
    case.  This fixes lockups in 'Meltdown' ROM.</li>

<li>Added support for different directories for saving/loading PNG
    files.  These are set with the 'snapsavedir' and 'snaploaddir'
    commandline arguments (which replace the old 'snapdir'), and are
    also available within the UI.</li>

<li>Changed 'eepromdir' commandline argument to 'nvramdir', and changed
    the default location to BASEDIR/nvram (where BASEDIR depends on your
    OS).  This means all your EEPROM and Flash files will have to be
    manually moved to this new directory.  This affects developers, and
    those people playing ROMs with AtariVox/SaveKey support as well as
    the newer 'Star Castle' FA2 ROMs.</li>

<li>Updated included PNG and ZLIB libraries to latest stable version.</li>

</ul>


<H4>December 22, 2012</H4>
Stella release 3.7.5 for Linux, MacOS X and Windows is now available.
<ul>
<li>Improved regressions in PAL format autodetection, introduced in the
    past several releases.</li>

<li>Fixed crash when loading invalid PNG files in ROM browser.</li>

<li>Snapshots generated by Stella now include more informative info, such
    as the build number, platform architecture, TV effects in use, etc.</li>

</ul>


<H4>October 31, 2012</H4>
Stella release 3.7.4 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed screen blanking regression in 'Video Chess', and improved
    behaviour of ROMs that don't use VSYNC.</li>
</ul>


<H4>October 26, 2012</H4>
Stella release 3.7.3 for Linux, MacOS X and Windows is now available.
<ul>
<li>Note: because of TIA/RIOT changes, the state file format has changed
          again, and old state files will not work with this release.</li>

<li>Improved handling of 'illegal' VSYNC signals, which sometimes created
    'short' frames that caused massive flickering.  Also improved
    related behaviour when VSYNC isn't used at all.</li>

<li>Improved sound generation with ROMs that have irregular scanline
    counts.  This fixes many demo ROMs as well as Quadrun, where
    previously there would be 'gaps' in the sound output.</li>

<li>Improved emulation of RIOT chip, in particular the behaviour of
    reading from TIMINT.  Also, D6 of the Interrupt Flag register is now
    properly set on active transition of the PA7 pin.</li>

<li>Fixed bug in DPC+ bankswitch scheme; the music in several ROMS wasn't
    playing correctly.</li>

<li>The ROM properties database now uses 'Auto' instead of 'Auto-select'
    everywhere.  This makes for less typing when running from the
    commandline.</li>

<li>Updated included PNG library to latest stable version.</li>

</ul>


<H4>June 10, 2012</H4>
Stella release 3.7.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed bug in handling filenames with the '~' character, as is used
    extensively by RomHunter rom-sets.</li>
</ul>


<H4>June 8, 2012</H4>
Stella release 3.7.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Note: because of TIA changes, the state file format has changed again,
          and old state files will not work with this release.</li>

<li>Improved TIA emulation with ROMs that have too few or too many
    scanlines; the output is now more accurate compared to a real TV.
    Special thanks to Omegamatrix of AtariAge for test ROMs in this area.</li>

<li>Modified hotkey for "Change console palette" (Control-f) to also
    change the display properties of the TIA.  This allows you to switch
    between NTSC/PAL/SECAM (and variant) modes dynamically.  Related to
    this, added Shift-Control-f key to step backwards through the
    available modes.</li>

<li>Added '64in1' and '128in1' multicart bankswitching schemes, which work
    the same as the 2in1/4in1/etc ones (Control-r switches to each
    consecutive game in the ROM).</li>

<li>Fixed several bugs in DPC+ bankswitching scheme, including ability
    to load and save state files.  As well, ROMs now work correctly after
    console format autodetection.</li>

<li>Fixed bugs in handling relative filenames on the commandline,
    introduced in the last release.  The new functionality should be much
    more robust.</li>
</ul>


<H4>June 1, 2012</H4>
Stella release 3.7 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added <a href="http://slack.net/~ant/libs/ntsc.html">Blargg TV effects</a>,
    with presets for Composite, S-video, RGB,
    and badly adjusted TV, and well as a custom mode with full
    configurability of contrast, brightness, gamma, etc.  Many
    keyboard shortcuts and commandline arguments were added to support
    this; see the documentation for a detailed explanation.  These
    effects are OpenGL-only.  Special thanks to Ian Bogost and the
    Georgia Tech Atari Team for the preliminary implementation.</li>

<li>Updated the CompuMate keyboard handler to recognize more keys on an
    actual keyboard, instead of having to remember the weird combinations
    used on the original CompuMate keyboard (although those original keys
    will continue to work).  Related to this, fixed bug whereby
    'ghost keys' would be detected by the CompuMate, particularly after
    pressing 'Enter' to start a game from the ROM launcher.</li>

<li>Added emulation for MindLink controller using the mouse; the 'Bionic
    Breakthrough' and 'Telepathy' ROMs now work.</li>

<li>Updated FA2 bankswitch scheme (Star Castle) to emulate load/save
    high score functionality to the Harmony cart flash RAM.</li>

<li>Added ability for ROM launcher to 'descend' into ZIP files when it
    contains more than one ROM file.  This means you no longer have to unzip
    a multi-file archive before using each ROM.  Thanks go to Roland
    Schabenberger (webOS maintainer) for this idea and sample code.</li>

<li>Several improvements to the debugger/disassembler:
  <ul>
    <li>The 'resolvedata', 'showaddr' and 'gfxformat' commandline
        arguments are renamed to start with 'dis', indicating that
        they're used with the built-in disassembler.</li>
    <li>Zero-page code addresses no longer have their high-byte
        truncated, and system equates (TIA and I/O registers) are now
        properly marked as such.</li>
    <li>The Distella '-r' option (Relocate calls out of address range)
        is no longer the default, resulting in output more consistent
        with normal usage of Distella.  Related to this, added the
        '-dis.relocate' commandline argument (and associated UI item)
        to toggle this dynamically.</li></ul></li>

<li>Fixed bug in EFSC bankswitch scheme state saving; the Superchip RAM
    wasn't actually being loaded and saved to state files.</li>

<li>Improved speed of loading and saving state files, as well as slightly
    reducing their size.  Because of this, old state files will not work
    with this release.</li>

<li>Replaced commandline argument 'uselauncher' with 'exitlauncher'.  The
    new option specifies the behaviour of the ROM launcher when exiting
    a ROM (always exit to launcher, or only when the launcher was actually
    used).  This setting can now be changed in the GUI.</li>

<li>Several updates to the internal properties database:
  <ul>
      <li>'Juno First' ROMs now use an AtariVox/SaveKey when possible</li>
      <li>'Astroblast' ROMs now use the paddles by default</li>
      <li>'Star Castle 2600' ROMs added</li></ul></li>

<li>Changed key-combo for enabling TIA objects and collisions to be
    toggled on and off with the Alt-period and Shift-Alt-period
    respectively (instead of having two separate keys to turn them on
    and off).</li>

<li>When working on the commandline, relative filenames are now
    correctly handled (current working directory is used).</li>

<li>The Windows 98/ME/2000 builds have been discontinued, due to code and
    features that are only available on Windows XP/SP3 and later.</li>

<li>Updated included PNG library to latest stable version.</li>
</ul>


<H4>March 30, 2012</H4>
Stella release 3.6.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Extended FA2 bankswitch scheme to handle 28K ROMs (in addition to
    the previously supported 24K ROMs).</li>
</ul>


<H4>March 16, 2012</H4>
Stella release 3.6 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added support for <a href="http://www.2600-daptor.com">2600-daptor II</a>
    device, including native support
    for 7800 controllers, BoosterGrip and Keypad controllers.  Special
    thanks go to Tom Hafner for a complimentary test sample of this
    device, and also for donating a BoosterGrip controller.</li>

<li>Added ability to dynamically swap the port order of Stelladaptor/
    2600-daptor devices with the 'Control-1' key combo (useful if you
    have only one 2600-daptor and want to use it as a left port
    normally, but as a right port for Star Raiders, etc).</li>

<li>Added CompuMate bankswitching/controller support to the emulation
    core; the Spectravideo CompuMate ROMs (NTSC and PAL) now work.
    Frequently used keys on the CompuMate are directly mapped to your
    keyboard (ie, Func-Space for backspace is mapped to Backspace, etc).
    Loading/saving from the cassette player is not yet supported, and
    will come in a future release.</li>

<li>Fixed bug in BoosterGrip controller emulation; the functionality
    of the booster and trigger buttons was reversed.  Related to this,
    renamed these actions in the Event Mapping dialog to be more clear.</li>

<li>Reverted to SDL 1.2.14 for the Windows 98/2k release, since SDL
    1.2.15 isn't supported in that environment.</li>

<li>Updated included PNG library to latest stable version.</li>
</ul>


<H4>February 4, 2012</H4>
Stella release 3.5.5 for Linux, MacOS X and Windows is now available.
<ul>
<li>Due to changes in the debugger, old state files will not work with
    this release.</li>

<li>Fixed bug in sound restructuring introduced in the last release; in
    some cases, there could be some sound 'crackling' when starting a
    ROM after at least one ROM had already been loaded.</li>

<li>Several significant improvements to the debugger I/O tab:<ul>
    <li>added controller input widgets for many of the built-in
        controllers, allowing to control joysticks, paddles, etc
        from within the debugger.</li>
    <li>added ability to modify the SWCHB/SWBCNT port B registers.</li>
    <li>added ability to view TIA INPTx and VBLANK latch/dump bits.</li></ul></li>

<li>Reworked 'mcontrol' argument, and added ability to map the mouse
    axes separately for paddles 0-3 or driving controllers 0-1.  In
    such modes, the left mouse button is tied to the x-axis, and the
    right button is tied to the y-axis.</li>

<li>Mouse 'specific-axis' mode is now saved per-ROM, meaning that each
    ROM can have separate settings.  For example, this allows one ROM to
    use paddles 0 and 1, while another can use paddles 0 and 2, etc.</li>

<li>The key-combo for switching the mouse between controller modes is now
    'Control-0' (Control-1,2,3 have been removed).  This switches
    between all possible modes for the current virtual controllers.</li>

<li>Fixed bug in 'Fixed Debug Colors' mode; under certain circumstances,
    playfield graphics could be coloured as being player graphics.</li>

<li>Fixed bug in PAL color-loss setting in Video Settings; changing the
    settings wouldn't take effect until the ROM was reloaded.</li>

<li>Fixed bugs with cheatcode handling; loading a ROM with a cheat
    disabled would sometimes trash the emulation.  More work is
    required in this area, including the ability to create more
    advanced types of cheats.</li>

<li>Updated ROM properties database for all Sega Genesis controller
    compatible ROMs.  Also, the mouse can now emulate a Genesis
    controller, with the left/right buttons mapped to buttons B and C,
    respectively.</li>

<li>Added 'FA2' bankswitch scheme, thanks to code from Chris D.
    Walton.  This scheme will be used in an upcoming 'Star Castle' ROM.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 7
    (thanks go to RomHunter for his tireless research in this area).</li>

<li>Added several PERL tools to help in automation of analyzing RomHunter
    ROM set releases.</li>

<li>Fixed compile issues in Irix when using the default compiler
    instead of gcc.  Thanks go to Rainer M. Canavan for this code.</li>

<li>Updated included PNG library to latest stable version.</li>
</ul>


<H4>December 29, 2011</H4>
Stella release 3.5 for Linux, MacOS X and Windows is now available.
<ul>
<li>Stella is now DonationWare!  Please see the <a href="donations.php">
    DonationWare link</a> on the main webpage for more information.</li>

<li>Added several improvements to the joystick management code.  Joystick
    event mapping is now saved per device, meaning that if you map events
    to a certain joystick device, remove the device and then later insert
    it again, Stella will remember the original mapping.</li>

<li>The total number of joysticks present and their associated properties
    (number of axes, buttons and hats) is now dynamic.  That is, there's
    no longer a hard-coded limit on the number of joysticks that Stella
    can use, or the number of buttons, etc that it contains.  This fixes
    a serious bug with PS3 controllers with 27 buttons, whereby adding a
    mapping for joystick 0 would inadvertantly change settings for
    joystick 1, and could potentially lead to a program crash.</li>

<li>Added 'mcontrol' commandline argument, which can specify to use each
    mouse axis as a separate paddle.  The old (and default) behaviour can
    be activated by setting this argument to 'auto'.  Related to this,
    removed redundant 'usemouse' argument.</li>

<li>Huge restructuring of the OpenGL code, making it compatible with 
    OpenGL 2.x+ features (such as vertex buffer objects), while at the
    same time keeping compatibility with OpenGL 1.5 / OpenGL ES.
    Because of the required changes, TV effects were removed (they will
    be added again for the next release).</li>

<li>Improvements to audio handling, particularly for certain cases of
    Windows, ATI video cards, and OpenGL mode.  The sound device is now
    opened only once when Stella starts, and is paused between loading
    different ROMs.  This fixes a problem whereby sound could possibly
    not be functional after loading the first ROM.  Related to this,
    removed the 'audiofirst' commandline argument as it's now redundant.</li>

<li>Fixed bug with displaying the ROM launcher in Windows XP; the initial
    load was sometimes taking up to 30 seconds to complete.</li>

<li>Added logging facility, whereby the output of the application is
    available within Stella itself.  This can still be printed to the
    console, or also saved to a file.  Add the 'loglevel' and
    'logtoconsole' commandline arguments which control these settings,
    and removed the 'showinfo' argument as it's now redundant.</li>

<li>Updated DPC+ bankswitching scheme to latest code provided by
    SpiceWare.</li>

<li>Added MAMCR handling to the Thumb ARM emulation code.  Note that
    MAMCR isn't actually emulated, it is just ignored for now.  This
    fixes a bug whereby accessing MAMCR would crash the ARM emulation.</li>

<li>Added 'thumb.trapfatal' commandline argument, which causes the
    Thumb ARM emulation to either trap on a fatal error (throw an
    exception to the debugger and exit emulation) or simply log the
    error and continue.  This should normally always be enabled, but
    can be disabled by developers for testing reasons.</li>

<li>Updated default snapshot directory to be much saner and easier to
    find.  For most systems, it now defaults to the users 'Desktop'.
    Note that the commandline argument has changed to 'snapdir'.</li>

<li>The debugger 'print' command now indicates "special" addresses if
    they are read-only (R), write-only (W) or read-write (R/W).</li>

<li>Fixed a bug where scrolling the mouse-wheel in certain debugger UI
    items would cause the program to crash; scrolling now works as
    expected.</li>

<li>Fixed minor display issue in the debugger RAM area; some addresses
    were being displayed as '...'.</li>

<li>Fixed compile issues in the latest versions of Ubuntu and Debian, and
    fixed UNIX desktop file so that Stella will launch with a ROM when
    selected from its icon.  Thanks go to Stephen Kitt for this code.</li>

<li>Updated included PNG library to latest stable version.</li>

<li>Updated the credits list in the documentation, listing people that
    have donated hardware to the Stella team.</li>
</ul>


<H4>June 11, 2011</H4>
Stella release 3.4.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Re-enabled 'grabmouse' commandline argument and associated
    functionality with the following changes:<ul>
      <li>it is changed in the "Input Settings' UI, not in 'Video Settings'</li>
      <li>it only has meaning while in emulation mode</li>
      <li>it is enabled by default</li></ul></li>

<li>Fixed bug with emulation of paddles using the mouse most evident in
    Warlords; movement was being filtered out if the mouse was moved too
    fast.  There's still more work required in this area, however.</li>

<li>Fixed bug with analog axes on gamepad devices, whereby jittering in
    these axes would override input from digital axis, hat or keyboard
    input.</li>

<li>Fixed bug when switching to the debugger and back again would
    sometimes cause an extra mouse motion event (which would cause the
    emulation to think the mouse was moved and move the player
    accordingly).</li>

<li>Tweaked bankswitch autodetection code for 4A50 bankswitching; several
    more test ROMs are automatically detected.</li>

<li>The 'saverom' debugger command now saves ROMs in your home
    directory by default if you don't specify a valid path.  This fixes
    a bug whereby ROMs were saved in strange locations and couldn't later
    be found.</li>

<li>Fixed bug in automatically executing the debugger 'autoexec.stella'
    file; any commands it contained weren't actually being executed.</li>

<li>Zero-byte ROMs are no longer loaded and mis-detected as Supercharger
    images.</li>
</ul>


<H4>May 29, 2011</H4>
Stella release 3.4 for Linux, MacOS X and Windows is now available.
<ul>
<li>Many improvements to input handling, particularly with the mouse and
    paddles:<ul>
    <li>The mouse can now be used to emulate a joystick, booster-grip or
      driving controller.</li>

    <li>The mouse now controls only one device at a time (1 of 4 paddles,
      1 of 2 joysticks, etc), instead of devices from both virtual ports.</li>

    <li>The sensitivity for digital and mouse input (for paddles) can now
      be set separately with the 'dsense' and 'msense' commandline
      arguments, and from within the Input Settings UI.</li></ul>
</li>

<li>Added support for the 2600-daptor device (<a href="http://2600-daptor.com">http://2600-daptor.com</a>), which is
    similar to a Stelladaptor but improves handling of paddles.  Thanks
    go to Tom Hafner for a complimentary test sample of this device.</li>

<li>Added new controller types 'Paddles_IAxis', 'Paddles_IDir', and
    'Paddles_IAxDr', which invert the paddle axis, direction, and
    axis+direction, respectively.  These are used for certain ROMs
    that have the axis or direction inverted from normal (for example,
    using the paddles causes on onscreen object to move up and down vs.
    left and right).  All applicable ROMs in the internal database
    have been updated.</li>

<li>Added preliminary support for emulating ARM code to the DPC+
    bankswitching scheme (thanks to Batari).  Related to this, fatal
    errors in the DPC+ ARM code are now caught and shown in the debugger.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 6
    (thanks go to RomHunter for his tireless research in this area).</li>

<li>The ROM audit dialog now automatically selects the current
    directory in the ROM launcher, and reloads the directory after
    the audit is complete.</li>

<li>Removed the 'grabmouse' functionality; the mouse is now always
    grabbed while playing a game, and released otherwise.</li>

<li>Updated built-in version of the PNG library to the latest version.</li>
</ul>


<H4>November 12, 2010</H4>
Stella release 3.3 for Linux, MacOS X and Windows is now available.
<ul>
<li>Added the following Distella 'directives', which are used to override
    and specifically tell the debugger how to treat address space (CODE,
    GFX, PGFX, DATA, ROW).  See the debugger documentation for more
    information.</li>

<li>Disassembly from the debugger is now tracked by the emulation core,
    and accented by the built-in Distella code.  Basically, the emulation
    core knows when an address is referenced as code, making for very
    accurate disassembled output.  Related to this, the emulation core now
    tracks accesses to GRPx and PFx registers, automatically marking the
    addresses as GFX or PGFX sections.  This will be improved in future
    releases, as there are many ways to store data in the graphics
    registers.</li>

<li>Improved output of graphics output in the disassembler, by marking
    such addresses with a bitmap of the data they represent.  This
    allows player graphics (GFX directive) and playfield graphics (PGFX
    directive) to really stand out in the disassembly.  Related to this,
    added ability to edit such graphics in either binary or hexidecimal.</li>

<li>Added preliminary support for Distella configuration files.  Much
    more work is required in this area, since Stella now contains
    directives that don't yet exist in the standalone Distella program.
    Configuration files are automatically loaded, and debugger commands
    now exist to load and save configuration directives directly from
    the debugger.</li>

<li>Added the following commands to the debugger prompt:
  <ul>
    <li>clearconfig, listconfig, loadconfig, saveconfig<br>
       (used for Distella configuration files)</li>
    <li>code, data, gfx, pgfx, row<br>
       (directives used to override automatic disassembly types)</li>
    <li>jump (jumps to a specific address in the disassembly)</li>
    </li>type (gives detailed info for disassembly type of an address)</li>
  </ul>
</li>

<li>The debugger prompt commands 'trap', 'trapread' and 'trapwrite' now
    accept a range of addresses as well as a single address.</li>

<li>Added 'data source' address output for the CPU SP/A/X/Y registers.
    This is useful for quickly seeing what an operand address resolves
    into with various load commands.</li>

<li>Many commands in the debugger prompt are now case-insensitive;
    further improvements will be made in future releases.</li>

<li>Many improvements to the built-in Distella disassembler.  When passing
    a relative branch or jump, data is now disassembled as code only if
    the emulation core hasn't detected it as data.  Such 'preliminary'
    code is marked with a '*' in the disassembler, indicating that it is
    tentative code, and hasn't actually been executed yet.  This allows to
    quickly see possible code paths, and at the same time eliminate
    disassembly of addresses that are never used as code sections.</li>

<li>Program counter/instruction addresses can now be toggled in the
    disassembly.</li>

<li>Disassembled instructions involving relative branches now show only
    one byte for the operand, not two bytes.</li>

<li>Fixed bug in several text input fields, whereby binary data couldn't
    be input (a '\' was required, but the character was blocked).</li>

<li>Fixed issues with PAL ROMs on screenmodes smaller than a PAL ROM
    would require.  In this case, the image is centered and clipped to
    the screen resolution.  This prevents the message "PAL ROM not
    supported" from appearing.</li>

<li>Fixed bug in fullscreen OpenGL mode when using ATI video cards;
    the desktop background was 'bleeding through', resulting in a very
    annoying flickering.</li>

<li>Fixed crashes when opening windows larger than the desktop resolution
    in fullscreen mode; this is now allowed only in windowed mode.</li>

<li>Application window centering now also works when switching between
    video modes, not just when starting the application.</li>

<li>Added support for building a Windows version compatible with Windows
    98 and 2000 (compiled with Visual Studio 2005).  Testing is very
    limited, since I no longer have access to these systems.</li>

<li>Fixed build issues for Innosetup in Windows XP.</li>

<li>Fixed bug in OSX version where the name of the application wasn't
    being shown in Activity Monitor.</li>

<li>State files from older versions will no longer work in this release,
    because of the extensive changes to the debugger and disassembler.</li>
</ul>


<H4>September 17, 2010</H4>
Stella release 3.2.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed bug with window centering; if enabled and the the window was
    larger than the desktop, the window would be moved offscreen.</li>
</ul>


<H4>August 25, 2010</H4>
Stella release 3.2.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Improved behaviour of joystick 'hat' movement.  This should fix bugs
    most visible in Yars' Revenge.</li>

<li>Fixed bug in debugger rewind states; bankswitching wasn't being
    performed during the rewind.  Related to this, fixed a similar issue
    with the debugger 'loadstate' and 'savestate' commands.</li>

<li>Added game properties info for the newly released 'Halo 2600' ROM.</li>
</ul>


<H4>August 20, 2010</H4>
Added an FAQ (frequently asked questions) section to the Stella webpage.


<H4>August 20, 2010</H4>
Stella release 3.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>NOTE: because of the many event-related changes in this release, all
    event mapping should be reset to defaults after starting Stella for
    the first time.  As well, because of other internal changes, older
    save-state files are no longer valid.</li>

<li>Many improvements to joystick handling code, particularly for analog
    axes.  Navigating the UI should be much smoother now, and remapping
    events to analog axes should be less 'twitchy'.</li>

<li>Added ability to assign and remap 'combo' events in emulation mode.
    Combo events are basically a sequence of normal events (up to 8)
    that are generated from a single event (ie, one button on a joystick
    could generate up to 8 events).  Updated Input Settings UI to
    access and modify these events.</li>

<li>Default mappings are now available in UI and emulation mode for the
    first 'hat' detected on a joystick/gamepad.  Related to this, a hat
    now works exactly like an axis in UI mode (holding down a direction
    continues that direction until the hat is released/centered).</li>

<li>Several major improvements to the debugger:
	<ul>
    <li>the disassembler can now process multiple entry points, and
        caches entry points as they're encountered (ie, the disassembly
        isn't 'reset' each time a bank change occurs or you exit and
        re-enter the debugger)</li>
    <li>preliminary support for disassembling from zero-page RAM</li>
    <li>re-added ability to change banks with the 'bank' debugger
        prompt command and within the ROM disassembly UI</li>
    <li>user labels in disassembly are now supported again</li>
    <li>'runto' command is now case-insensitive, and shows a progressbar
        while searching through the disassembly</li>
    <li>the debugger window can be resized between ROM loads (previously,
        the app had to be restarted)</li>
    <li>fixed bug in Distella disassembler output, where it sometimes
        generated addresses above $FFFF</li>
    <li>a vertical line separates the disassembly from the raw bytes</li>
	</ul>
</li>

<li>Fixed behaviour of SWCHB and SWBCNT; pins set to output now remember
    the values previously written.  Some ROMs use this functionality for
    extra storage.  Special thanks to Omegamatrix of AtariAge for advice
    and test ROMs in this area.</li>

<li>Fixed bug when reading from illegal TIA addresses; a Space Invaders
    hack was showing pink enemies instead of white ones.  Again, special
    thanks to to Omegamatrix of AtariAge for advice and test ROMs in this
    area.</li>

<li>Fixed bug in handling INPT4/INPT5 latches from VBLANK; a least one
    ROM was working in Stella when it didn't on real hardware.</li>

<li>Added 'ramrandom' commandline argument, which is used to randomize
    all RAM in the system; otherwise, the RAM is zeroed.</li>

<li>Added 'finishing touches' to some of the UI descriptions, giving a
    better explanation of the functions.  Related to this, certain
    options now show a message box explaining the option in further
    detail (particularly the ROM Audit mode).  As well, when starting
    Stella for the first time, a prompt appears to select a ROM
    directory.</li>

<li>Fixed bugs in the ROM launcher when viewing certain PNG images not
    created by Stella.  Related to this, the official PNG library is now
    included in the Stella codebase (version 1.4.3).  Also added composite
    snapshots for those ROMs which consist of several games.  Thanks go
    to Buzbard of AtariAge for these images.</li>

<li>Added several fixes for crashes on 'small' systems (those systems
    where the maximum resolution is less than 640x480).</li>

<li>Tweaked bankswitch autodetection for 0840, DPC+, E7 and UA schemes.</li>

<li>Improved F8 bankswitch autodetection for Yars Revenge in 8in1 ROM.</li>

<li>Updated DPC+ bankswitch scheme to latest specifications.</li>

<li>Snapshots taken in continuous snapshot mode are now timestamped, so
    older files are never overwritten.</li>

<li>Fixed a TIA segfault that could occur with certain ROMs.</li>

<li>The 'center' application window functionality can now be changed
    without having to restart the application.  Related to this, mouse
    positioning bugs when using the Linux version in OpenGL mode with
    SDL 1.2.14 have been fixed.</li>

<li>Reworked the manual, dividing it into 'Getting Started' and
    'Advanced Configuration' sections.  It still contains the same info
    as before, but hopefully in a better organized way.</li>

<li>Updated Help dialog; it was showing incorrect info for some OSX
    shortcuts.</li>

<li>Updated OSX build script to not crash when a previous build is
    detected, and to properly handle filenames with spaces.</li>

<li>Updated included ZLib to latest release version (1.2.5).</li>
</ul>


<H4>May 3, 2010</H4>
Stella release 3.1.2 for Linux, MacOS X and Windows is now available.
<ul>
<li>Modified 'showinfo' command to accept levels of output, where
    increasingly larger numbers provide more debug output.  Related to
    this, added UI item to modify 'showinfo'.</li>

<li>Updated DPC+ bankswitch scheme to latest specifications, including
    support for 32K ROMs with ARM code (the ARM code is ignored for now).</li>

<li>Fixed bug in saving patched ROMs using DPC and DPC+ bankswitch
    schemes; the saved image didn't actually include any changes made by
    the user.</li>

<li>Removed 'uselauncher' from the UI, since disabling it will remove
    the ROM launcher on all future runs, and not allow one to enable it
    again.  It's still available from the commandline, for those that
    have a need for it.</li>
</ul>


<H4>April 26, 2010</H4>
Stella release 3.1.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed program crash when using RIOT addresses and labels in the
    debugger console prompt.</li>

<li>Updated DPC+ bankswitch scheme to latest specifications.</li>
</ul>


<H4>April 22, 2010</H4>
Stella release 3.1 for Linux, MacOS X and Windows is now available.
<ul>
<li>Fixed a major bug with text drawing in software rendering mode.
    Switching between windowed and fullscreen mode while text was being
    shown could result in garbled text or even a program crash.</li>

<li>Fixed issues when using 'sleep' timing, whereby a lockup could occur
    when changing video modes, and/or Stella would consume more CPU time
    than was necessary.</li>

<li>Integrated Distella disassembler, completely replacing the previous
    disassembler.  The entire infrastructure has not been completely
    ported yet.  As a result, labels defined by the user or from a
    DASM symbol file aren't actually used in the disassembly, and almost
    all distella config options are disabled.  These will be addressed in
    a future release.</li>

<li>Completely reworked the debugger cartridge interface, so that
    the disassembly is dynamic (ie, the debugger tracks when cart address
    space has changed, and automatically performs a re-disassembly).</li>

<li>All carts with extended RAM that differentiate between read and write
    ports now behave correctly when a read from the write port occurs.</li>

<li>Added more complete support for the more esoteric bankswitch
    schemes in the debugger.  These schemes now support accurate
    disassembly and ROM patch functionality.  Related to this, fixed a
    bug in disassembler view when a failure to patch a ROM still showed
    the (incorrect) patched results.</li>

<li>Added ability to disable TIA object collisions, independent of
    enabling/disabling the objects.  Previously, one had to completely
    disable an object to avoid collisions, but now an object can be
    enabled (and seen) but still have its collisions disabled.  These
    actions are tied to the same keys as the enable ones, except the
    'Shift' key is also used.</li>

<li>Added preliminary support for 'DPC+' bankswitching scheme, thanks to
    Darrell Spice Jr and Fred Quimby.</li>

<li>Added '16in1' bankswitching scheme, which works with various
    ROMs labeled '128-in-1 ...' (the database has been updated for
    these).  Related to this, switching between multicart ROMs for 2in1,
    4in1, 8in1, 16in1 and 32in1 now shows a UI message indicating which
    ROM is active.</li>

<li>Reverted some of the TIA improvements with respect to 'starfield
    effect' as seen in "Cosmic Ark" and "Stay Frosty".  The emulation is
    now more accurate as compared to the majority of consoles in use.</li>

<li>Added debugger pseudo-register '_rwport', which traps on a read from
    the write port.  This differentiates from reads that are normally
    part of a write cycle (ie, it traps only on inadvertent reads).</li>

<li>Added 'resolvedata' commandline argument and associated UI item, used
    to set the "resolve data sections" config option in Distella
    (vs. treating all address space as code).</li>

<li>Added 'runtopc' debugger command, used to step until encountering the
    given program counter.  This is also available in the ROM disassembly
    UI from the right-click context menu.</li>

<li>Added 'listfunctions' and 'delfunction' debugger commands to
    access/remove user-defined functions.  Related to this, fixed a bug
    in 'function' command that could cause a program crash.</li>

<li>Added 'cls' debugger command, used to erase the text and history
    from the debugger prompt.</li>

<li>Removed the 'listwatches' and 'poke' debugger commands, as they
    were redundant.</li>

<li>Removed the 'loadlst' debugger command and the ability to use a
    DASM .lst file.  This code was incomplete, and no longer fits with
    the recent disassembler improvements.  Support for this may return
    in a future release.</li>

<li>Modified 'disasm' debugger command to accept a second argument
    indicating the number of lines to disassemble.</li>

<li>Improved tab-completion in the debugger prompt; it now completes
    on functions and pseudo-registers.</li>

<li>Added emulation of the "Sega Genesis" controller, with two buttons
    that are directly supported on a real system.</li>

<li>The ZLib library is now included in the core code, so Windows
    developers no longer have to track down the ZLIBWAPI archive.</li>

<li>Many changes to the MacOS X port, bringing it more in line with
    other systems:
	<ul>

      <li>The application is now known as 'Stella' (instead of StellaOSX).</li>

      <li>Two versions are available: the first is a 32-bit Universal Binary
      for OSX 10.4 - 10.6, and the second is 32/64-bit Intel-only for
      OSX 10.6 (aka Snow Leopard).  The Intel version is compiled with the
      very latest compiler (LLVM/Clang), resulting in better performance.</li>

      <li>The keyboard handling is changed to match other systems in terms of
      where the keys actually are on the keyboard (ie, the OSX Command key
      corresponds to Alt, and the OSX Control key corresponds to Control).</li>

      <li>The application menu has been cleaned up and simplified, and it
      now shows the correct shortcuts for menu items.</li>

      <li>The settings file is now (according to Apple standards)
      '~/Library/Preferences/net.sourceforge.Stella.plist'.</li>

      <li>The base directory (where all other Stella stuff is located) is now
      '~/Library/Application Support/Stella'.</li>

      <li>Because of these changes, all your settings will have to be entered
      again.</li>
	</ul>

<li>Added 'ctrlcombo' commandline argument, which toggles the use of the
    control key as a modifier key.  This is useful if you want to press
    'Control' and 'R' in a two player game, and not have the combination
    treated as 'Control-R' (which will issue a ROM reload).</li>

<li>Added 'usemouse' commandline argument and associated UI item.  This
    toggles the use of the mouse as a controller of any type.</li>

<li>Added 'uimessages' commandline argument and associated UI item.
    This toggles showing of UI messages overlaid on the screen.
    Critical messages are still shown, though.</li>

<li>Added ability to take multiple snapshots in a given interval every
    x seconds.  This is currently tied to the 'Alt-s' key and is not
    remappable (for now).  The interval can be set with the 'ssinterval'
    commandline argument and within the UI, and defaults to 2.</li>

<li>Many changes to the FrameBuffer and UI code for 'smaller' systems.
    Stella will now scale correctly to small screens, down to 320x240
    (which is the absolute lower limit supported).  Related to this,
    added 'maxres' commandline argument, which is useful for developers
    testing on such systems.</li>

<li>The About dialog now shows the version of SDL in use, and the type
    of CPU the application is running on (i386, x86_64, etc).</li>

<li>Improved 'listrominfo' commandline argument to list all information
    from Stella's internal ROM database, including a heading.  This
    output can be imported into a spreadsheet or database program.</li>

<li>Renamed 'tiafloat' commandline argument to 'tiadriven'.  The
    emulation of the behaviour of floating TIA pins is also much more
    accurate.</li>

<li>Reworked state files so that they're associated with the cartridge
    type used, not the MD5sum of the ROM.  This is useful for developers,
    since the same state file can now be loaded from different ROMs,
    as long as the cart type stays the same.  This also fixes a bug
    where loading from a non-existent state file could cause Stella
    to crash.  Because of these changes, old state files will no longer
    work.</li>

<li>Fixed bug in certain editable text fields, where pressing Return/Enter
    would disable any further input.</li>

</ul>


<H4>September 11, 2009</H4>
Stella release 3.0 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
Note that starting with this release, the oldest supported version of
Windows is Windows 2000; support has been discontinued for Windows 95/98/ME.
It's been at least 10 years guys, it's time to move on.
<ul>
<li>Huge updates to the TIA emulation system.  Illegal HMOVEs are now
    handled correctly, resulting in improvements to many ROMs (thanks
    to Wilbert Pol for many ideas and code for these improvements).  All
    HMOVE emulation 'cheats' were removed; the emulation is now cycle-exact
    in this area.</li>

<li>Improved emulation of the Cosmic Ark 'starfield effect', also used in
    Stay Frosty; the emulation now looks very accurate.</li>

<li>Many improvements to the normal TIA rendering code, fixing problems
    when disabling certain graphical objects (certain objects were
    being misdrawn when others were enabled/disabled).</li>

<li>Improved TIA collision handling in the non-displayable area of the
    screen; this fixes problems in RAMRacer ROM.</li>

<li>Improved TIA redraw problems/graphical garbage when ROMs generate
    many more scanlines than a real TV would allow; this fixes problems
    in Q-Bert and the recent Playaround demo.</li>

<li>Added 'Fixed Debug Colors' option similar to the no$26k emulator.
    This allows each graphical object to be drawn in a fixed color,
    more clearly showing how the objects interact.  HMOVE blanks are
    also shown in a different color.  The TIA now emulates a 7-color
    register model, allowing even shared objects to show different
    colors.  This is toggled with the 'Alt Comma' key.</li>

<li>Related to 'Fixed Debug Colors', HMOVE blanks can now toggled during
    TIA display with the 'Alt-m' key.</li>

<li>Added rewind functionality to the debugger, where states are saved
    after each step/trace/scanline/frame advance.  Pressing 'Alt-r' or
    clicking the new rewind button will undo up to 100 previous
    operations.</li>

<li>Added 'electron beam indicator' to the debugger TIA output.  Basically,
    this is a visual pointer indicating the position of the electron gun
    when scanning the display.</li>

<li>Added ability to completely disable fullscreen mode, which fixes
    problems for some people where fullscreen mode was being entered
    even if it wasn't enabled.</li>

<li>Added '-joyallow4' commandline argument and associated UI item to
    allow all 4 directions to be pressed simultaneously on a joystick.</li>

<li>Improvements made to the ROM launcher: the backspace key now goes
    to the parent directory (this key can be remapped), and previously
    selected directories are now automatically selected.</li>

<li>Added support for 2IN1 bankswitching scheme, where two ROMs are
    present in one binary.  Currently supported are 2, 4, 8, and 16K
    ROMs.</li>

<li>Added bankswitch support for the 6K version of Starpath/Supercharger
    ROMS.  This allows the 6K version of Cubis to run.</li>

<li>Updated bankswitching schemes FASC and MB; they are now known as
    FA and F0, respectively.  This naming brings Stella in line with
    other emulators and programming utilities.</li>

<li>Fixed editing of cheats in the Cheat Dialog; the old cheat wasn't
    being removed.</li>
</ul>


<H4>July 13, 2009</H4>
Due to somewhat popular demand (and the fact that I finally got Mandriva
2009 working in VirtualBox), the Mandriva RPMs are available again.
Hopefully I can keep the VM working for future releases, but if anyone
is interested in maintaining RPM builds for Mandriva, Fedora, etc, I'd
really like to hear from you.


<H4>July 4, 2009</H4>
Stella release 2.8.4 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed bug where Stella could lock up after running for ~71 minutes.
    Special thanks to Robert Tuccitto for bugtesting and feedback on this
    issue.</li>

<li>Updated UA bankswitch autodetection for Gingerbread Man ROM.</li>

<li>Updated 0840 bankswitch autodetection for Toyshop Trouble ROM.</li>

<li>The smallest ROM that Stella can support is 64 bytes; this lower
    limit is now tested when loading Sub2K ROMs.</li>

<li>Starting from this release onward, I will be providing Linux binaries
	for the latest version of Ubuntu only (currently, 32/64-bit Jaunty).
	The Mandriva RPMs are discontinued, but will probably be still
	available from the <a href="http://plf.zarb.org">PLF repository</a>.
	Sorry for any inconvenience this may cause, but I can no longer
	build, maintain or support packages for systems that I don't
	personally use.</li>
</ul>


<H4>June 25, 2009</H4>
Stella release 2.8.3 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed OpenGL bug which caused an immediate program crash if the
    available OpenGL version was less than 2.0.</li>
</ul>


<H4>June 23, 2009</H4>
Stella release 2.8.2 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed OpenGL detection bug which could disable OpenGL support entirely
    if TV effects are not available (version &lt; 2.0), when in fact only the
    effects should have been disabled.</li>

<li>The '\' character can now be entered in UI text fields again.
    Related to this, strings containing '\' are now properly loaded and
    saved to various config files.</li>
</ul>


<H4>June 19, 2009</H4>
Stella release 2.8.1 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>NOTE: Windows users will have to reset their options or manually move
    their config folder in this release, since the location of the config
    files has changed.</li>

<li>Fixed OpenGL issue for some Windows users whereby the OpenGL TV
    effects weren't available, even if the available version of OpenGL
    was sufficient.  Related to this, the OpenGL version found by
    Stella is now reported in the TV effects dialog.</li>

<li>Added fallback to software rendering when OpenGL rendering has been
    requested, but for whatever reason fails to initialize.</li>

<li>Added native support for 4in1, 8in1 and 32in1 multicart bankswitching
    schemes.  When using these schemes, the 'Reload ROM' action
    (by default, Control-r) will switch between each game in the ROM.</li>

<li>Added bankswitch support for ROMs smaller than 2K in size.  These
    will be treated as 2K ROMs natively, without having to manually
    'pad' them to 2048 bytes.</li>

<li>Added preliminary suppport for autodetection of X07 bankswitching.</li>

<li>Tweaked PAL autodetection; it was marking some PAL ROMs as NTSC.</li>

<li>Changed default location for Stella config files in Windows to
    the users' APPDATA folder (for XP and Vista, this is
    '~/Application Data/Stella').  The '~' symbol now represents the
    users PROFILE/home directory, matching its usage in Linux and OSX.
    The ability to override this with 'basedir.txt' is still
    available, but not advised.</li>

<li>Changed '-exitlauncher' commandline argument to '-uselauncher'.
    This works as before except the launcher is never used at all if
    the option is set to false.</li>

<li>Fixed crash when launching Stella from the commandline and giving
    a directory name instead of a rom filename.</li>
</ul>


<H4>June 9, 2009</H4>
Stella release 2.8 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Added CRT simulation effects as described in the AtariAge posting
    <a href="http://www.atariage.com/forums/index.php?showtopic=142886">CRT emulation for Stella</a>.
    For now, this requires OpenGL 2.0 or greater with support for GLSL
    (GL Shading Language).  This code will be expanded on and optimized
    in future releases.</li>

<li>Adding editing of extended RAM in the debugger RAM UI.  The RAM
    'spreadsheet' now shows the entire address space of RAM in the
    system, in 128 byte increments.  The first bank shown is zero-page,
    with the others following in consecutive order.  The UI takes care
    of read vs. write port differences, so you don't have to worry
    about the offsets.  For now, all SuperChip based ROMs (EFSC, F4SC,
    F6SC, F8SC) as well as 3E, CV, E7 and FASC are supported.</li>

<li>All ROMs which include SC extended RAM will now have memory erased if
    you attempt to read from the write port.  Related to this,
    entering/exiting the debugger will no longer erase the extended RAM.</li>

<li>Patching of ROM for bankswitch types 0840, SB, UA and X07 is now
    implemented, but hasn't been extensively tested.</li>

<li>Visual improvements to the CPU register UI in the debugger; the
    SP/A/X/Y registers now have separate decimal and binary views.</li>

<li>Tweaked paddle control so that all positions are reachable in game
    4 of Activision Casino in both NTSC and PAL versions.</li>

<li>SuperCharger/AR ROMs now start with a random value in the CPU
    accumulator.  This should fix issues with Dragonstomper always
    starting in exactly the same state.</li>

<li>Auto-detection for '3F' bankswitching improved; several ROMs
    previously detected as 'F8' now work correctly.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 5
    (thanks go to RomHunter for his tireless research in this area).</li>

<li>Added '-exitlauncher' commandline argument and associated UI item,
    to specify what happens when you exit a ROM.  Normally, exiting a
    ROM brings up the ROM launcher, but this can be disabled for those
    using an external frontend (in which case exiting a ROM also exits
    from Stella).</li>

<li>Re-added '-fastscbios' commandline argument, and added an associated
    UI item.  When enabled, the SuperCharger load bars are now completely
    removed (and not just sped up as in previous releases).</li>

<li>The '-listrominfo' commandline argument now shows all ROM
    information built in to the internal database, taking into account
    any information in 'personal' stella.pro files.</li>
</ul>


<H4>May 16, 2009</H4>
Major website update using newer technologies (PHP and CSS).  Updated
many dead links, and added a new 'Homebrew Developers' section.
Special thanks go to Andrew Kator
(<a href="http://www.katorlegaz.com">http://www.katorlegaz.com</a>)
for providing the PHP/CSS code.


<H4>May 12, 2009</H4>
The Stella repository has now been fully converted to Subversion.  All
developers currently using CVS should switch over to SVN immediately.


<H4>May 1, 2009</H4>
Stella release 2.7.7 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Corrected emulation of CPU opcodes involving 'decimal' mode (ADC/RRA
    and SBC/ISB).  Special thanks to SeaGtGruff and others on the Stella
    mailing list for in-depth discussion and creation of test ROMs.</li>

<li>Fixed bug in F4SC bankswitching mode; writes to bankswitch addresses
    weren't triggering a bank switch.</li>

<li>Changed internal sound frequency of Pitfall 2 from 15.75KHz to 20KHz,
    as this sounds much more authentic when compared to a real cartridge.</li>
</ul>


<H4>April 14, 2009</H4>
Stella release 2.7.6 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Added support for 'EF' bankswitching (Paul Slocum Homestar Runner),
    as well as auto-detection of this format.</li>

<li>Added support for 'EFSC' bankswitching, as well as auto-detection of
    this format.  This is similar to the 'EF' scheme, but also includes
    128 bytes SuperChip RAM.</li>

<li>Added autodetection for '0840' and 'SB' bankswitching formats.</li>

<li>Improved autodetection for 'UA' bankswitching format.</li>

<li>Fixed bug in selecting video modes larger than the current screen;
    the resulting video mode will now be the largest one available
    (previously it selected the smallest one available).</li>

<li>The currently selected CPU register now displays its value in
    decimal and binary (in addition to hex) in the debugger.</li>
</ul>


<H4>March 27, 2009</H4>
Stella release 2.7.5 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>After about 2 years, finally fixed the infamous 'red screen' issue when
    using ATI video cards in OpenGL mode in Windows.  In the end, it was
    determined to be a bug in the ATI drivers.  Special thanks go to
    Ant (<a href="http://aqfl.net">http://aqfl.net</a>) for bugtesting and
    constant feedback wrt this bug.</li>

<li>Fixed bug in TIA SCORE mode emulation when the Priority bit is also
    set.  This fixes a very noticable graphical glitch in 'Swordquest
    Waterworld', as well as minor glitches in several other ROMs such
    as 'Space Shuttle'.</li>

<li>Treat spaces as normal characters in the ROM launcher.  This means
    that ROMs with spaces can be located with quick selection (ie,
    typing characters will automatically jump to a ROM with that name,
    and typing 'space' won't cause the launcher to jump back to the top
    of the list).</li>

<li>The debugger window can now have a minimum height of 620 lines
    (previously the minimum was 690), but you lose access to the TIA 'RAM'
    bytes when using this resolution.  This should allow it to work
    better on devices with small displays.</li>
</ul>


<H4>February 9, 2009</H4>
Stella release 2.7.3a for Windows is now available.
<ul>
<li>Fixed minor issue in 2.7.3 with basedir.txt functionality; the
    pathnames can now contain spaces.</li>
</ul>


<H4>February 9, 2009</H4>
Stella release 2.7.3 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed rendering issues in software mode when using 24-bit colour depth.
    This isn't as fast as 16 or 32-bit modes, so you're recommended to use
    one of those whenever possible.</li>

<li>For the Win32 port: re-added ability to change the default location
    for storing Stella config files.  To use this, simply create a file
    named 'basedir.txt' in the application directory containing the full
    path where all Stella-related items should be stored.</li>

<li>Tweaked the TIA info statistics overlay to be smaller while still
    including all relevant information.</li>
</ul>


<H4>January 27, 2009</H4>
Stella release 2.7.2 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed major bug in ROM Audit functionality; renaming ROMs would create
files without an extension.</li>
</ul>


<H4>January 26, 2009</H4>
Stella release 2.7.1 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Partial workaround for sound not working in OpenGL video mode in
    Windows with ATI video hardware.  Sound will now work for the first ROM
    selected, but not for subsequent ones (you will have to quit and
    restart Stella for sound to work again).  Related to this, added
    '-audiofirst' commandline argument, which initializes audio before video
    when emulating a ROM.  Further work is required to completely fix
    this bug.</li>

<li>Fixed bug where volume wasn't being saved in 'Audio Settings' when
    started from the ROM launcher.</li>

<li>Fixed crash which sometimes occurred when viewing snapshots in the
    ROM Info viewer.</li>

<li>Allow setting window sizes for the ROM launcher and debugger to be larger
    than your desktop resolution.  Be careful with this feature, as switching
    to fullscreen mode may cause problems in such cases.</li>

<li>Made the ROM launcher filename filtering be case-insensitive.  This fixes
    a bug whereby ROMs with uppercase extensions were marked as invalid.</li>

<li>Added a pattern matching textbox to the ROM launcher, used to
    further filter the files shown in the listing.  For now, this filters
    files only (directories are not filtered, and are always shown).</li>

<li>The location of EEPROM files used for AtariVox/Savekey emulation can
    now be changed with the '-eepromdir' commandline argument as well as
    in the UI.</li>

<li>Added '-gl_aspectn' and '-gl_aspectp' commandline arguments (and
    associated UI items), which replace the previous '-gl_aspect' setting.
    The aspect modes can now be set separately for NTSC and PAL mode.
    Related to this, the range of values is now 80 - 120.</li>

<li>Fixed bug with hold-select/reset/button0 when overriding ROM properties;
    the checkboxes in the UI weren't actually doing anything.</li>

<li>The 'grabmouse' option is now configurable from the UI; previously
    it was only accessible from the commandline or its shortcut key.</li>

<li>Removed 'Emulation_HmoveBlanks' ROM property and associated UI item.
    You can no longer optionally turn off HMOVE blanking; it is always
    enabled when necessary.</li>
</ul>


<H4>January 19, 2009</H4>
Stella release 2.7 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
	<ul>
<li>Totally reworked the built-in UI to be font-sensitive and use higher-resolution
    fonts.  Stella now requires a minimum screen size of 640x480.
    If used in a resolution smaller than that, the fonts will be reduced
    accordingly.  Related to this, switching between software and OpenGL
    rendering now requires an application restart.</li>

<li>Added three different sized fonts (small, medium, large) which can be
    used in the ROM launcher.</li>

<li>Added ability to temporarily override ROM properties from the UI.  This
    is tied to a right mouse button context menu in the ROM launcher, and
    is very useful when you want to use a set of properties for all
    subsequent ROMs without having to manually change each one.</li>

<li>Added ability to filter the files shown in the ROM launcher.  Currently,
    the choices are 'all files', 'all roms', or 'roms ending with a certain
    extension'.  This functionality is tied to a right mouse button context
    menu in the ROM launcher.  Extensions can also be set with the
    '-launcherexts' commandline argument.</li>

<li>Added ability to reload the listing in the ROM launcher, either from
    a right mouse button context menu or pressing the Control/Cmd-R key.</li>

<li>Made the ROM info viewer in the ROM launcher configurable to show
    snapshots in 1x or 2x mode.</li>

<li>Made the delay between consecutive keys being recognized as one word
    configurable in the ROM launcher.  This is useful if you find that you
    have to press keys too quickly to jump to a specific ROM.  This can be
    set in the UI or using the '-listdelay' commandline argument.</li>

<li>Updated internal ROM properties database to ROM-Hunter version 4
    (thanks go to RomHunter for his tireless research in this area).</li>

<li>Expanded the statistics overlay for the TIA image to also show
    Display Format and Bankswitch type information.</li>

<li>Added '-ss1x' commandline argument and associated UI item, used to
    generate snapshots in 1x mode, independent of the filtering/scaling
    currently in use.</li>

<li>Various path textboxes in the UI now recognize './' (or '.\') to mean
    the current directory and '~/' (or '~\') to mean your home directory
    (for Windows, home directory will be your 'My Documents' folder).</li>

<li>Large speedup in loading directories with many files in the ROM launcher.</li>

<li>Fixed reset issue in 3E, 4A50, AR, CV, E7, F4SC, F6SC, F8SC, FASC and MC
    ROMs; the internal RAM wasn't being randomized after the initial reset.</li>

<li>M6532/RIOT RAM is now randomized at every reset, not just when the
    emulation starts.</li>

<li>Fixed bug in _diff pseudo-registers in the debugger; they were actually
    defined backwards.</li>

<li>Added fix for 'Challenge/Surfers Delight' ROM; the startup bank was
    incorrect.  Combined with the new 'Override Properties' functionality,
    you can now play both games directly from the UI (no need to use the
    commandline).</li>

<li>Fixed paddle issue with Activision Casino ROM; the last card in game 4
    can now be reached.</li>

<li>Added new pseudo-registers to the debugger, useful for conditional
    breakpoints (_fcount, _cclocks, _vsync, _vblank).</li>

<li>Added 'timing' commandline argument functionality to the UI, so you no
    longer need to use the commandline to set it.</li>

<li>Size restrictions on the TIA image are now strictly enforced.  The
    maximum height of a 1x TIA image is now 256 lines.</li>

<li>Added a new setting to the 'fullres' option named 'auto'.  Using
    'auto' will let Stella decide the best videomode to use in fullscreen.</li>

<li>Changed 'gl_fsmax' option to mean 'scale TIA image in fullscreen'.  It
    will have no effect on UI modes.</li>

<li>Changed 'gl_aspect' option to range 80-100 (previously, it was 50-100).</li>

<li>Removed 'ui_zoom' and 'tia_zoom' options, replacing them with
    'tia_filter' (which can be zoom1x, zoom2x, etc).  There is no equivalent
    for ui_zoom, since the UI can no longer be scaled.</li>

<li>Added experimental 64-bit version for Vista64 (may also work on WinXP64).
    This hasn't been extensively tested, and is probably quite a bit slower
    than the 32-bit version.</li>

<li>OSX port now requires at least 10.3 and XCode 3.0 to compile.  Sorry,
    but I no longer have access to older systems to compile for 10.2.</li>

<li>Huge updates to the documentation, particularly concerning the debugger.
    Many features that have been in Stella for a while are now documented for
    the first time.</li>
	</ul>


<H4>May 23, 2008</H4>
Stella release 2.6.1 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
	<ul>
<li>Introduced more accurate timing for NTSC vs. PAL modes, where the
    framerate is based on the number of scanlines per frame.  This should
    eliminate 'clicking' sounds when emulating ROMs that don't follow
    the exact NTSC or PAL scanline specs.</li>

<li>Added ability to see the current number of scanlines and corresponding
    framerate to the TIA emulation.  This can be set with the '-stats'
    commandline argument, or dynamically turned on and off with the
    'Alt-l' key combo.</li>

<li>Modified '-framerate' commandline argument, where a non-zero value
    overrides the automatic framerate calculation (based on number of
    scanlines).  Setting 'framerate' to zero re-enables auto-frame
    calculation.  Also, re-enabled changing the framerate from within the
    UI.</li>

<li>Added '-timing' commandline argument, which sets the type of waiting
    between processing frames.  Setting it to 'sleep' emulates the
    previous behaviour in Stella; setting it to 'busy' emulates z26,
    and can in some cases eliminate screen tearing (at the expense of
    using all available CPU time).</li>

<li>Fixed issue with debugger disassembly and mirrored $40 TIA write
    addresses.  They were actually defined at $30, and generating incorrect
    labels.</li>

<li>Fixed issue in AtariVox and SaveKey controllers where accessing the
    EEPROM sometimes failed after the first write.</li>

<li>Changed AtariVox and SaveKey EEPROM emulation to default to $FF for
    a blank EEPROM.</li>

<li>Fixed regression in cart auto-detection logic; some F6 ROMs were being
    misdetected as E7.</li>

<li>Fixed issue with M6532/RIOT timer initialization; it was causing some
    ROMs to hang (most notably Summer Games).  Related to this, reworked
    the built-in random number generator to generate 'more random' numbers.</li>

<li>Fixed bug in CommandMenu where console buttons (Select, Reset, etc)
    weren't doing anything.</li>
	</ul>


<H4>May 16, 2008</H4>
Stella release 2.6 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
    <li>Added AtariVox support using a real AtariVox device, where Stella
    sends data directly to the AtariVox.  For now, this is supported in
    Linux/UNIX, OSX, and Win32 only.  You'll obviously need a real
    AtariVox, and a serial<->USB adaptor to connect it to your system.
    Added '-avoxport' commandline argument used to set the serial port
    to which the AtariVox is connected.  Special thanks to Al Yarusso
    and Richard H. for providing sample hardware.</li>

    <li>Added AtariVox and SaveKey EEPROM emulation.  This reads/writes data
    to a 32KB file, not to the actual hardware.  Very useful for testing
    EEPROM support without actually wearing out the real device.  Special
    thanks to J. Payson for providing the EEPROM emulation code, and A.
    Herbert for answering many driver-related questions.</li>

    <li>Added support for CX-22, CX-80, and AmigaMouse trackball controllers.</li>

    <li>Improved debugger symfile handling so that addresses accessed as
    read-only won't use write-only labels (and vice-versa).  More work
    is still needed in this area.</li>

    <li>Added M6532/RIOT tab to the debugger.  This will be expanded on in a
    future release.</li>

    <li>Added TIA emulation fixes for graphical glitches in Escape from the
    Mindmaster, Mission Survive, Solaris, and SWOOPS!</li>

    <li>Fixed bug where fullscreen OpenGL scaling wasn't working on 4:3 monitors.</li>

    <li>Further improvements to the M6532/RIOT emulation, which unfortunately
    have broken old state files (again).</li>

    <li>Added deadzone setting, for adjusting the deadzone amount for
    analog joysticks.  This can be set using the commandline argument
    '-joydeadzone' or dynamically within the UI.</li>

    <li>Make ROM disassembly in debugger take advantage of a wide window.</li>

    <li>Fixed bug in 6507 BCD handling introduced in the last release.</li>

    <li>For the Win32 port; Win9x should be fully supported again.</li>
</ul>


<H4>April 9, 2008</H4>
Stella release 2.5.1 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
<ul>
<li>Fixed M6532 RIOT timer emulation.  More testing is needed, but the
    changes so far have fixed several ROMs that didn't work before.</li>

<li>Fixed issue with weird characters in the debugger disassembly when
    loading .lst files.</li>

<li>Fixed bug where entering the debugger for 4A50 and E0 carts caused
    the ROM to be frozen afterwords.</li>

<li>Removed logic whereby starting a ROM from something other than the
    built-in launcher wouldn't allow the user to go back to the ROM launcher.</li>

<li>Fixed bug (hopefully) with the app icon not showing on the Stella window.
    Further testing is needed, since I can't duplicate the error myself.</li>

<li>Fixed default snapshot folder issues; the folder will now be
    automatically created in the same place as state folders, ini files,
    etc (whereever that may be for your platform).</li>

<li>Re-added 'lastrom' functionality, where Stella will remember and
    auto-select the last ROM that was successfully launched in the ROM
    launcher.</li>

<li>For Stella developers, fixed SpeakJet emulation so it compiles again.
    No improvements have been made to the emulation itself, though.</li>
</ul>


<H4>March 28, 2008</H4>
Stella release 2.5 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.

<ul>
<li>Added RomInfo widget to the ROM launcher, which shows properties
    information and a snapshot of the currently selected ROM.  Updated the UI
    and added '-romviewer' commandline argument to activate this setting.
    Note that the ROM launcher will have to be sized at least 640x480 for this
    to be used.  Also note that the snapshots must be in 1x mode with a
    maximum size of 320x260.  This will be expanded on in a future release.</li>

<li>Added ROM audit functionality, whereby ROMs can be physically renamed
    according to their properties' name.</li>

<li>Added bankswitching support for 0840, SB, X07 and 4A50.  A special thanks
    to Eckhard Stolberg for much help in this area.</li>

<li>Removed "non-browse" functionality from the ROM launcher; it now always
    uses browse/filesystem mode.  The previous 'pretty' names can now be
    seen by renaming all your ROMs with the new ROM audit feature.</li>

<li>Huge overhaul of controller handling and Stelladaptor support, making it
    much easier to add new controller types in a future release.</li>

<li>Fixed paddle issues in Night Driver; paddle emulation speed should be
    much better.</li>

<li>Fixed several 6507 emulation bugs related to BCD handling.</li>

<li>Updated ROM properties based on info from RomHunter.</li>

<li>ROM properties can now be edited from the ROM launcher; you no longer
    have to start a ROM to do so.</li>

<li>Added support for configurable font to ROM launcher (currently only
    'small' and 'large').  Updated the UI and added -launcherfont' commandline
    argument to change this setting.</li>

<li>Added SECAM, NTSC50, PAL60 and SECAM60 to the list of formats that can
    be used.  Also, switching between these modes with 'Ctrl-f' now switches
    the palette only; the number of scanlines won't change.</li>

<li>Fixed crash when switching between software and OpenGL mode with a
    Stelladaptor plugged in.</li>

<li>Added '-tiafloat' commandline argument, which determines whether or not
    the TIA pins are in a 'floating' state.  This is useful for testing on
    certain CMOS EPROM chips where the unused TIA pins on a read are not
    floating but pulled high.</li>

<li>Fixed issue in debugger where once a .sym file was loaded, it was used
    in all ROMs loaded after that.</li>

<li>Fixed issue in debugger where equate names weren't showing up in the RAM
    and CPU widgets.  Note that this still isn't perfect, and needs support
    from DASM for proper functionality.</li>

<li>Updated state file format, creating smaller files (and in preparation
    for state rewinding in a future release).  Old state saves will no longer
    work.</li>

<li>Added '-bs' commandline argument, which is an alias for '-type' (which
    is still present).</li>

<li>Removed -pXspeed' commandline arguments, and replaced them with a
    single '-pspeed'.</li>

<li>Removed '-paddle' commandline argument.  The paddle currently emulated
    by the mouse can still be changed with Ctrl-0..3 or within the UI, but
    the setting is no longer saved.</li>

<li>Reworked UI for specifying that the console ports have been swapped,
    hopefully making it easier to understand.</li>

<li>Added 'Ctrl-c' & 'Ctrl-v' to EditTextWidgets, allowing to copy and paste
    the text widget contents.  More work in this area is coming in a future
    release.</li>

<li>Added 'Ctrl-leftarrow' and 'Ctrl-rightarrow' to EditTextWidgets, to move
    to the first character of previous and next words (respectively).</li>

<li>For the Win32 port: fixed OpenGL crashes in Vista.  Graphical updates
    are still slower in Vista compared to XP, though.</li>

<li>For the Win32 port: default folder for Stella config files is now
    'My Documents\Stella'; this can be disabled if necessary.  This should
    fix issues with losing settings when launching Stella from an IDE,
    and the creation of stella.ini and 'state' directories in many
    different places.</li>

<li>For the Win32 port: several fixes to the Visual Studio project files,
    allowing building in debug or release mode, for both i386 and x86_64.
    The project files have been upgraded to Visual Studio 2008, and Stella
    can now be built and distributed without the VS runtime libraries.</li>

<li>Updated configure script for cross-compiling Win32 version in Linux.</li>
</ul>


<H4>September 18, 2007</H4>
Stella release 2.4.2 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.

<ul>
<li>Made usage of 'GL_TEXTURE_RECTANGLE_ARB' extension configurable, and
	have it default to off.  This should take care of the black/white
	screen many people were experiencing with ATI video hardware.  This
	is accessible using the 'gl_texrect' commandline argument).  Set it to
	'true' or 'false' to enable/disable the extension.</li>
</ul>


<H4>August 27, 2007</H4>
Stella release 2.4.1 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

<ul>
<li>Re-added OpenGL aspect ratio setting ('gl_aspect' commandline argument).</li>

<li>Re-added non-browser mode to the ROM launcher.</li>

<li>For the Linux/UNIX port; fixed OpenGL vsync issue with Nvidia video cards.</li>
</ul>


<H4>August 20, 2007</H4>
Stella release 2.4 for Linux, Mac OSX and Windows is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
<li>Added new video sub-system where fullscreen and windowed modes are treated
    differently.  Windowed modes now use '-zoom_tia' and '-zoom_ui' arguments,
    while fullscreen modes can be specified by resolution using the new
    '-fullres' argument.</li>

<li>Widescreen video modes are now supported; Stella will simply center the
    image with surrounding black borders.</li>

<li>Many UI-related changes, including resizable ROM launcher and debugger
    windows, and a new UI palette (the previous 'classic' palette is still
    available).  This is still a work in progress.</li>

<li>The locations of all major config files (statedir, palette file,
    cheat file, properties file, etc) are now configurable from the
    commandline and within the UI.</li>

<li>Updates to TIA palette support.  Added SECAM support, and removed the
    built-in 'original' palette.  Standard, z26, and user are still
    available.</li>

<li>Various bugfixes to some debugger commands.  The 'run' command no
    longer causes a crash, and several others have better error-checking.</li>

<li>Added more complete cartridge auto-detection for Commavid (CV), 3E,
    3F and Activision (FE) formats.</li>

<li>Removed XStart and Width ROM properties, since the forthcoming TIA
    rework won't be using them.</li>

<li>Reworked internal storage of ROM properties to be faster and take up
    less space.</li>

<li>Added several different ways of stretching the OpenGL image to the
    '-gl_fsmax' argument, for more flexibility.</li>

<li>Removed OpenGL aspect ratio setting favour of the previously mentioned
    video changes.  We'll see how this goes.</li>

<li>Removed dirty-rect support from software rendering, since it was actually
    sub-optimal in Windows and OSX and defaulted to off in previous versions.</li>

<li>Added support for gzipped ROMs.</li>

<li>Re-added pause support.</li>

<li>Re-added support for Windows 98.</li>

<li>Removed support for 'STELLA_BASEDIR' environment variable, since each
    config file can be now configured separately.</li>

<li>Removed '-fastscbios' argument, since it must always be turned on.</li>

<li>Removed PSP support, since it hasn't been updated in over a year, and
    someone else is maintaining another port elsewhere.</li>

<li>For the Unix/Linux port; fixed 'make install' issues, and changed icon to
    PNG format.</li>
	</ul>


<H4>January 17, 2007</H4>
Stella release 2.3.5 for Linux, Mac OSX, Windows and GP2X is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
<li>Greatly improved cartridge bankswitch type auto-detection.  Stella
can now (mostly) autodetect cartridge types 'E0', 'E7', '3E', '3F' and
Superchip carts.  Obviously, this autodetection is not infallible, but
relies on patterns in the ROM data, and how it was compiled.  Because
of the auto-detection types already supported, almost all bankswitch
info was removed from internal ROM properties.  Set the ROM property
"Cartridge.Type" to "Auto-detect" for this to take effect.</li>

<li>Added auto-detection of display type (NTSC or PAL).  Currently, PAL60
ROMs will be detected as NTSC.  This is almost 100% accurate, and fails
in very few cases (for those that are mislabeled, the ROM properties
can be set specifically).  Set the ROM property "Display.Format" to
"Auto-detect" for this to take effect.</li>

<li>Improved emulation timing when exiting one ROM and starting another.
Previously, this could result in the second ROM having its sound start
later than it should have.</li>

<li>Removed pause functionality from the core, since it's been superceded
by the other event states.  You can now enter one of the menus for a
similar effect (options, command, debugger, etc).</li>

<li>Added toggle for PAL color-loss emulation, which defaults to off.
Previous versions of Stella always used color-loss emulation.
Related to this, added 'colorloss' commandline argument.</li>

<li>Added rudimentary support for configuring the UI palette ('uipalette'
commandline argument) and ability to change the size of the launcher window
('launchersize' commandline argument).  This will be expanded on in future
releases.</li>

<li>Reworked options menu so it's now accessible from the ROM launcher as
well as while playing a ROM.</li>

<li>Re-added ability to change the width and height of a Console.  Related to
this, changing XStart/YStart/Width/Height dynamically no longer resets
the ROM.</li>

<li>Removed 'tiadefaults' commandline argument, since Stella will now default
to using accurate positioning, and not use 'tweaks'.</li>

<li>Joystick code now allows all 4 directions; 'Bumper Bash' now works
correctly.</li>

<li>Improved Keypad emulation; 'Alpha Beam with Ernie', 'Oscars Trash Race'
and 'Magicard' now work correctly.</li>

<li>Reworked GUI code, so that all dialog boxes are automatically centered.</li>

<li>Added 'rominfo' commandline argument, which prints some detailed info for
a ROM.</li>

<li>For the OSX port; fixed crashes in OpenGL mode.</li>

<li>For the GP2X port; some improvements to the sound code.</li>

<li>For the GP2X port; added vertical centering of the TIA image (when possible).</li>
	</ul>


<H4>December 22, 2006</H4>
Stella release 2.3 for Linux, Mac OSX, Windows and GP2X is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
<li><b>Note: Because of the many changes in this release, all settings
will be reset to defaults.  If this doesn't happen for you, it will be necessary
to manually delete your previous settings (see 'Settings' section of the manual
for more information).</b></li>

<li>Potentially huge speedups in software rendering mode, both in emulation
and UI modes.  Deactivating 'dirty rects' uses these new modes, which
can be 2-3 times faster for many configurations.</li>

<li>For UI navigation, changed from using 'joymouse' to the more familiar
'tabbing' functionality, where you move from object to object by use of
some tab key.  As a result, completely removed the 'joymouse' commandline
argument and all associated functionality.</li>

<li>Added event remapping for UI events, separate from events while in emulation
mode.</li>

<li>Added support for PAL60 ROMs, which use the PAL palette and resolution
but run at NTSC timing (60Hz).  Added ROM property for this, and updated
the internal properties database for many PAL60 ROMs.</li>

<li>Added support for user-definable palettes.  For now, only one extra palette
is supported, but in the future we may have them specified per-ROM.</li>

<li>Fixed bug in PAL colour-loss emulation, which wasn't actually being done
for the original Stella and z26 palettes.</li>

<li>Fixed several TIA-related emulation bugs as reported on AtariAge.  More
fixes will come with the TIA rewrite, due in the next release.</li>

<li>Added new scaler infrastructure, replacing the '-zoom' commandline argument
with '-scale_ui' and '-scale_tia'.  This means the UI and emulation can now
be scaled independently.</li>

<li>Added '-gl_vsync' commandline argument and associated UI elements, which
uses synchronization to vertical blank interrupt in OpenGL on supported
systems.  This eliminates tearing in OpenGL rendering.</li>

<li>Changed naming of snapshots and state files.  These files are now
named based on the names given in the properties database, and no longer
use the 'md5sum' name.  As a result, state files from previous versions
will no longer work unless they're manually renamed.  Related to this,
removed the '-ssname' commandline argument.</li>

<li>Fixed bug where 'Snapshot saved' appeared when taking snapshots in
succession.</li>

<li>Added a 'Previous directory' entry to the top of each listing while
in ROM Browse mode, which is equivalent to the 'Go Up' button.  This makes
it easier to navigate the filesystem, since you never have to 'tab out'
of the ROM listing.</li>

<li>Added all sound related commandline options to the UI, so you no
longer have to use the commandline to set those options.</li>

<li>Added new property to ROM properties specifying whether to swap paddles
plugged into a virtual port.  This eliminates the need to manually set the
paddle mode for those ROMs that don't use paddle zero by default.</li>

<li>Added a 'Defaults' button to the Game Properties dialog, which resets
the ROM properties to the internal defaults, deleting that ROMs properties
from the external properties file.</li>

<li>Fixed bug whereby modified ROM properties weren't being reloaded when
restarting a ROM.</li>

<li>Made 'phosphor' and 'phosphor blend' a ROM property, meaning it can be
set per-ROM.</li>

<li>Added support for relocating the base Stella directory, by setting the
environment variable 'STELLA_BASEDIR'.  This must be done each time before
Stella starts.</li>

<li>Added '-fastscbios' commandline argument, which speeds up loading of 
vertical bars in Supercharger ROMs, and made it the default.</li>

<li>Added '-autoslot' commandline argument, which automatically switches
to the next available slot after saving a state.  This defaults to off,
and must be set from the commandline.</li>

<li>Fixed bug in debugger command 'runto', which could enter an infinite
loop under some conditions.</li>

<li>Updated configure/build toolchain so patching is no longer required for Debian
packages.</li>

<li>Removed dependency on PNG library (PNG snapshots are still present, but the
actual library is no longer required).</li>

<li>For the OSX port, improved OpenGL performance on Mac Mini using Intel GMA950
video hardware.</li>

<li>For the GP2X port, added support for PAL ROMs, and updated SDL to use hardware
scaling.</li>

	</ul>


<H4>April 7, 2006</H4>
Stella release 2.2 for Linux, Mac OSX, Windows, WinCE and GP2X is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
<li>Added new ROM browser option which works like a normal filesystem
    browser, allowing navigation throughout the filesystem.
    The old mode of browsing is still present, and can be toggled at
    runtime.  Related to this, fixed bug whereby sorting in the ROM
    launcher sometimes didn't work.</li>

<li>Integrated stella.pro properties into the application, resulting in
    faster startup time.  Now Stella can be redistributed as a single
    binary; no external files are needed, but they will still be used
    if present.</li>

<li>Reworked ROM properties files once again.  The 'user.pro' file has
    been removed, and all user-defined properties are stored in
    'stella.pro' instead.  You should delete all properties files when
    upgrading to this version, to take advantage of the speed increases.</li>

<li>Reworked settings files once again.  Removed all references to a
    global settings file.  Each user now gets a user-specific settings
    file only.  If that file doesn't exist, the built-in defaults are
    used.</li>

<li>Added 'conditional saving' of the cheatcode and settings files, so
    that these files are only written to disk when absolutely
    necessary.  This doesn't really affect desktop systems, but is very
    useful for systems with flashram-based storage (GP2X, WinCE, etc).</li>

<li>Reworked Settings class, hopefully fixing a bug whereby settings
    weren't being saved in certain cases (most evident in the OSX port).</li>

<li>Added 'tiadefaults' commandline option, which can also be toggled
    from within the GUI.  This option disables all TIA positioning
    'tweaks' that typically make a game look better, and present the
    image exactly as it would appear on a real 2600.</li>

<li>Added jitter-detection code for the paddle emulation, which should
    eliminate an annoying 'jittering' effect when using paddles with
    a Stelladaptor.</li>

<li>Related to jitter-detection, added '-pthresh' commandline option
    and GUI entry, which sets a bound below which the emulation detects
    jitter.</li>

<li>Fixed crash when adding one-shot cheats.</li>

<li>Fixed bug in RAM comparitive searches in the debugger.</li>

<li>Fixed bug with setting snapshot naming type from the GUI (it was
    always being set to 'romname').</li>

<li>Re-added low compatibility CPU emulation mode, since it benefits
    some slower systems.  This is activated with the commandline argument
    '-cpu low'.</li>

<li>For the OSX port, added Universal binary support.</li>

<li>For the OSX port, reworked the menu handling, so that certain menu
    options are only enabled when it makes sense to do so.</li>

<li>For the GP2X port, fixed joystick deadzone issues and scroll bug in
    ROM launcher.</li>

<li>For the GP2X port, fixed issue with PAL ROMs causing a crash because of
    screen size.  A message is now shown indicating that PAL ROMs are not
    yet supported.</li>
	</ul>


<H4>January 29, 2006</H4>
Stella release 2.1 for Linux, Mac OSX, Windows, WinCE and GP2X is now available.
Ports to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Added <b>phosphor effect</b>, similar to z26.  Useful on ROMs which
			alternate sprites from one frame to another, resulting in an
			annoying flicker.  When using phosphor mode, a pixels colour is mixed
			with its previous value, resulting in a blended image that doesn't
			flicker, emulating the phosphoresence effect on a real television.</li>

		<li>Added 'pp' developer commandline argument to set the "Display.Phosphor"
			property, and 'ppblend' to set the amount to blend pixels in
			phosphor mode.  Also added 'Alt p' key to enable/disable phosphor
			effect while ROM is emulated.  By default, phosphor mode is only used
			when necessary, as specified in the stella.pro file.</li>

		<li>Renamed 'cheetah' commandline argument to 'cheat'.</li>

		<li>Added per-frame cheatcodes (4 characters long), which are evaluated
			each frame.</li>

		<li>Added cheatcode GUI, where cheats can be named, edited, saved, etc.</li>

		<li>Cheat codes are now saved to stella.cht file and are automatically
			reloaded when Stella starts.</li>

		<li>Improved 'joymouse' functionality.  While in GUI mode, any axis
			will simulate mouse movement, and any button will simulate a mouse
			click.  So the GUI can be completely navigated without a mouse.</li>

		<li>Improved CommandDialog and LauncherDialog wrt joymouse functionality.
			These dialogs are used more than any other on devices without a mouse,
			so joystick axis movement switches between GUI objects, rather than
			simulating the mouse.  This leads to much faster selection of objects.</li>

		<li>Added mapping of multiple SDL joystick axis to Event Mapping.</li>

		<li>Added joystick hat support, and mapping of multiple hats to Event
			Mapping.</li>

		<li>Added remapping of paddle emulation to the keyboard or joystick axis
			(the mouse is still used by default for paddles).  Related to this,
			use more precise analog values when analog axis are mapped to
			analog-type events (such as paddles).</li>

		<li>Treat joystick events as other types of controllers based on the
			virtual port entry in stella.pro.  This means that mappings for a
			joystick will emulate other devices when necessary.</li>

		<li>Added 'sp' developer commandline argument, which sets the 
			"Console.SwapPorts" property and swaps the arrangement of the
			virtual ports.  Useful for games like "Raiders of the Lost Ark",
			where the joysticks are normally swapped.</li>

		<li>Added ability to set which Stelladaptor device emulates which virtual
			joystick port ('sa1' and 'sa2' commandline arguments, which accept
			'left' or 'right').</li>

		<li>Fixed issues with jittering joysticks/mice causing weird events when
			starting Stella.</li>

		<li>Added 'freq', 'tiafreq' and 'clipvol' commandline arguments, which
			affect the sound subsystem (see manual for further info).</li>

		<li>Made state files completely cross-platform, both in terms of endianness
			as well as CPU size (32 vs. 64 bit).</li>

		<li>Fixed crash with using 'cheat' and 'break' from the commandline.</li>

		<li>Implemented dynamic loading of OpenGL library.</li>
	</ul>


<H4>October 25, 2005</H4>
Stella release 2.0.1 for Linux, Mac OSX and Windows is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Added 'dirtyrects' support, which speeds up rendering for some Windows
			users.</li>

		<li>Fixed bug where taking snapshots would fail if the snapshot directory
			wasn't specified.</li>

		<li>Made ROM launcher case-insensitive, so upper and lowercase names are now
			mixed in the correct order.</li>

		<li>Fixed ZIP ROM support to search the archive for ROMs ending with either
			.bin or .a26 (case insensitive).</li>

		<li>ROMs which don't have an associated properties entry are no longer named
			'Untitled' in the Stella window or when taking snapshots.  The actual
			ROM name is now used.</li>

		<li>Changed minimum height of debugger to be 27 lines in the prompt, or approx.
			700 pixels high.  This should make using the debugger easier for users
			with lower resolution monitors.  Related to this, the RomWidget now uses
			all possible vertical space when changing the debugger height.</li>

		<li>Fixed bug related to upgrading Stella and event mappings being incorrect.
			Stella now detects this, and uses the default mappings.  So upgrading
			to version 2.0.1 means your event mappings will be reset.</li>

		<li>Fixed bug in loading debugger symbol files generated on different
			operating systems.</li>

		<li>For the Windows port; added exe installer based on InnoSetup.</li>

		<li>For the Windows port; compiled icon into Stella, so it now looks like
			a real Win32 application.</li>

		<li>For the OSX port, reverted window resize key combos back to 'Cmd =' and
			'Cmd -' to match the 1.4.2 release.</li>
	</ul>

<H4>October 16, 2005</H4>
Stella release 2.0 for Linux, Mac OSX and Windows is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Added integrated GUI.  Stella is now a fully graphical application, and all
			settings can be changed dynamically while the application is running.  That
			means the commandline is no longer required (but support is still there
			for those who want to use it).</li>

		<li>Added ROM launcher.  You can now exit a game and start playing another one
			from directly within Stella (you no longer have to quit Stella and
			restart it).</li>

		<li>Because of the integrated GUI and ROM launcher, StellaX and KStella
			(the Windows and Linux frontends) have been discontinued.  The OSX
			port now uses the launcher as well.</li>

		<li>Added an integrated debugger for game developers.  This is currently
			the first version of a debugger in Stella, but it's already quite
			usable.</li>

		<li>Added new sound subsystem, which is much faster and more accurate.  Related
			to this, added stereo sound output (used by some homebrew games).

		<li>Added ZIP support.  Stella can now open ROM's compressed in zip
			format.</li>

		<li>Added cartridge 'frying', thanks to Fred "batari" Quimby.  This
			emulates the action of turning the power button on and off on a
			real Atari, often resulting in some strange effects.</li>

		<li>Added ability to edit current ROM properties from directly within
			Stella, which can then be saved directly into the 'user.pro' file.
			So creating a properties entry for a new ROM can be done without
			any external tools.</li>

		<li>Added initial support for using Stella in an 'arcade-box'
			environment without a keyboard.  This consists of an in-game
			menu for choosing common actions in Stella, as well as using the
			joystick navigate the mouse pointer.</li>

		<li>Reworked properties system to use both a system-wide 'stella.pro' and
			a per-user 'user.pro' properties files.  Changes made by the user
			and stored in 'user.pro' are no longer erased when upgrading Stella.</li>

		<li>Added support for cartridges with 3E bankswitching format.</li>

		<li>Added preliminary Cheat support.</li>

		<li>Added <b>Alt/Shift-Cmd z, x, c, v, b, n</b> keys to enable/disable the
			P0, P1, M0, M1, BL, PL bits in the TIA, respectively.</li> 

		<li>Added <b>Alt/Shift-Cmd .</b> key to disable all bits in the TIA.</li>
 
		<li>Added <b>Alt/Shift-Cmd /</b> key to enable all bits in the TIA.</li>

		<li>Added <b>Alt/Shift-Cmd g</b> key to switch dynamically switch between
			software and OpenGL modes while Stella is running.</li>

		<li>Added <b>Ctrl/Cmd r</b> key to reload the ROM currently being
			emulated.</li>

		<li>Added <b>Alt/Shift-Cmd s</b> key to merge the current game properties
			into the properties file.</li>

		<li>Added <b>help</b> commandline argument.  Launching Stella from the
			commandline with no options now starts Stella in ROM launcher mode,
			instead of showing help (as in previous versions).</li>

		<li>Added the following commandline arguments for developers:
			<b>pro, type, ld, rd, tv, lc, rc, bc, format, xstart, ystart, width
			height, cpu, hmove</b>.  Developers can consult the manual for
			further details.</li>

		<li>Removed <b>mergeprops</b> commandline argument, since there are now
				dedicated keys to either save or merge game properties.</li>

		<li>Removed <b>hidecursor</b> commandline argument.  Stella will now
			automatically decide when to use this setting.</li>

		<li>Fixed framerate when switching between NTSC and PAL modes.  Stella
			now uses the correct framerate based on the format of the ROM,
			in terms of both video <b>and</b> audio.</li>

		<li>Added 'configure' support to the build process for both Linux and
			Win32 (using MinGW).  Developers can now use the familiar 'configure;
			make; make install' commands to compile Stella.</li>

		<li>Further consolidation and integration of SDL.  This should lead to
			faster operation and a more consistent look for all ports.</li>

		<li>Fixed some 64-bit issues.  Stella now compiles and runs correctly
			on AMD64 and PPC64 Linux systems.</li>

		<li>Updated the Stella manual with pictures of the new integrated GUI.</li>
	</ul>

<H4>February 19, 2005</H4>
Stella release 1.4.2 for Linux, Mac OSX and Windows is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Updated the sound system. All popping and cracking sounds that previously
		    occurred at program start/stop and when entering/exiting menu or pause
		    mode have been eliminated.</li>

		<li>Fixed the gl_fsmax argument to mean "switch to desktop resolution on
		    fullscreen OpenGL", instead of to the maximum possible resolution (the two
		    are not always the same).</li>

		<li>Added Alt [ and Alt ] keys to dynamically adjust the sound volume during
		    emulation.</li>

		<li>Added Control 0, Control 1, Control 2, Control 3 keys to dynamically change
		    which paddle the mouse should emulate.</li>

		<li>Added video_driver argument. This accepts the different options that can be
		    specified for SDL_VIDEODRIVER (see SDL homepage for more information).
		    Basically, it eliminates the need to set the SDL_VIDEODRIVER environment
		    variable.</li>

		<li>Made sure screen is refreshed before taking a snapshot.  This eliminates
		    the problem with new snapshots containing the text "Snapshot saved".</li>

		<li>For the Windows port; added windib and directx as options for
		    'video_driver' when using software rendering. The 'windib' option is now
		    the default, and in many cases it's up to 10 times faster than using
		    'directx'.</li>

		<li>For the OSX port; added 'Cmd-R' key to reload the currently loaded ROM.</li>
	</ul>

<H4>August 15, 2004</H4>
Stella release 1.4.1 for Linux, Mac OSX and Windows is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Fixed PAL sound issues.  PAL games now should sound correct (no distortion
			or missing sounds), but some games may still run too fast.  This is still
			a work-in-progress, and will be fixed in Stella 1.5.</li>

		<li>Cleaned up the SDL event gathering loop.  This should hopefully fix the
			problems with "double-pumping events" reported by some Windows users.
			Event gathering and dispatching is now much faster as well.</li>

		<li>Fixed a bug where the Control or Alt keys could be assigned to some event,
			but they could never be used.  Control/Alt can now be used for any event.</li>

		<li>Updated stella.pro file to work with the latest Good2600 ROMset release
			(Thanks go to Voch for helping to maintain the stella.pro file).</li>

		<li>For the Windows port; removed requirement for ROM files to be named *.bin
		in the StellaX frontend.  The ROM's can now have any name, but ZIP-files are
		not yet supported.</li>

		<li>For the Windows port; fixed the problems with the included modified SDL
			library and Windows 98 users.  Stella should now run in Windows 98.</li>

		<li>For the OSX port; added preference to allow user to select the directory
			in which ROM images are stored.  This sets the default directory to start
			the browsing for a ROM in, and doesn't preclude the user from selecting a 
			file outside that directory.</li>

		<li>For the OSX port; fixed preferences bug where Preferences changed before
			a game was opened were not being saved.</li>
	</ul>

<H4>July 17, 2004</H4>
Stella release 1.4 for Linux, Mac OSX and Windows is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

	<ul>
		<li>Codebase ported to SDL.  The DOS and X11 ports have been discontinued.</li>
		<li>Sound code ported to SDL.  For the Linux versions, ALSA and OSS sound
			support has been discontinued.</li>
		<li>The Linux, MacOSX and Windows ports are now based on the same codebase and
			are actively maintained.  That means simultaneous (and hopefully
			more frequent) releases.</li>
		<li>A new Windows port has been created, with the GUI based on StellaX.
			This is the first new release for Windows since Stella 1.2.
			(software  mode is not yet optimized; OpenGL mode works much better)</li>
		<li>A new Mac OSX port has been created by Mark Grebe.  This is the first new
			release for Mac OSX	since Stella 1.2.</li>
		<li>Added OpenGL rendering support.</li>
		<li>Added more refined in-game GUI.</li>
		<li>Added event remapping.  Emulation keys can now be remapped to the keyboard
			or up to 4 joysticks.</li>
		<li>Added native Stelladaptor support.  Joysticks, paddles, and driving controllers
			have been tested.</li>
		<li>Digital sound support (used in games like Quadrun and Pitfall2) has been
			greatly improved.  Sound generation is now more tightly synchronized with
			video updates.</li>
		<li>Added support for switchable palettes.  Currently you can switch between the
			current Stella palette, original Stella palette (pre-1.2 versions), and
			the z26 palette.</li>
		<li>Added support for UA Limited style bankswitching (Funky Fish and Pleiades).</li>
		<li>Switched to using <i>high compatibility M6502 mode</i> by default. This
			means old state saves from previous Stella versions will no longer work.</li>
		<li>The meaning of the "<i>-sound</i>" command line option has been changed.
			This option now accepts either 'true' or 'false (1 or 0) to enable/disable
			sound.</li>
		<li>Changed sound mixer functionality.  The system volume/mixer settings will
			never be changed; volume changes in Stella will only affect the emulation
			itself.</li>
		<li>Added "<i>-video</i>" command line option.  This option accepts either 'soft'
			or 'gl', to use software/OpenGL rendering.</li>
		<li>Added "<i>-gl_filter</i>" command line option.  This option accepts either
			'nearest' or 'linear', to use GL_NEAREST or GL_LINEAR filtering.</li>
		<li>Added "<i>-gl_aspect</i>" command line option.  This option accepts a decimal
			value specifying how much to scale the width of the emulation image (useful
			for giving an authentic 'square-looking' 4:3 mode).</li>
		<li>Added "<i>-gl_fsmax</i>" command line option.  This option accepts either
			'true' or 'false, and specifies to use the maximum possible resolution when
			in fullscreen OpenGL mode (useful for Linux and for Windows on laptops).</li>
		<li>Added "<i>-fragsize</i>" command line option.  This option accepts the
			size to use for sound fragments.  Linux/MacOSX works well with 512,
			Windows seems to need 2048.  This value must be a power of two.</li>
		<li>Modified "<i>-volume</i>" command line option.  If you specify '-1',
			Stella will use the system volume.</li>
		<li>Renamed the "<i>-pro</i>" command line option to "<i>-altpro</i>".</li>
		<li>Renamed the "<i>-fps</i>" command line option to "<i>-framerate</i>".</li>
		<li>Removed the "<i>-center</i>" command line option.  Stella now automatically
			centers the window when possible.</li>
		<li>Removed the "<i>-paddle real</i>" command line option, since it never really
			worked correctly (and Stelladaptor support adds that functionality
			anyway).</li>
		<li>Removed all command line options relating to the X11 port
			(owncmap, display).</li>
	</ul>

<H4>February 17, 2003</H4>
Stella release 1.3 for DOS, Linux, and Unix is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:

<UL>
<LI>Improved TIA sound system so that games with digitized audio work

<LI>Added saving and loading of game state to the core; X11, SDL, and DOS
    versions current support saving and loading game state

<LI>Added support for F4 bankswitching method

<LI>Pitfall II DPC sound emulation completed

<LI>Fixed a bug which caused the difficulty switches to operate backwards

<LI>Changed DPC auto-detection to use file size so that Pitfall II mods work

<LI>Modified RIOT timer emulation so that startup values are random

<LI>Added 3F bankswitching auto-detection routine so that homebrews and
    demos work without a stella.pro entry

<LI>Updated the TIA message boxes so they look a little nicer 

<LI>Latest stella.pro file included in distribution

<LI>Added some developer options to the core, and the ability to change game
    width, height, xstart, ystart, and others while the emulation is running.
    Added ability to switch between NTSC and PAL at runtime, and the ability
    to save the current properties to a file or to merge the changes into the
    stella.pro file; X11 and SDL versions supported for now (compile option)

<LI>External sound server for the X11 and SDL versions no longer required, as
    all sound code is now integrated into the core 

<LI>Changed locations of the user's config files for the X11 and SDL versions;
    the user's stellarc file is now located in $HOME/.stella/stellarc, state
    files are located in $HOME/.stella/state/ and the stella.pro file is
    located in $HOME/.stella/stella.pro

<LI>Changed the way options are supplied on the commandline for the X11 and
    SDL versions. Now all commandline options take exactly the same arguments
    as in the INI file.

<LI>Added "-accurate" command line option to choose between accurate
    (CPU-intensive) timing or less accurate (CPU-friendly) timing to X11
    and SDL versions. This is the final version of what was considered
    experimental timing code in Stella 1.2.

<LI>Added "-sound" command line option to choose which sound backend to
    use (alsa, oss, sdl) with the X11 and SDL versions.

<LI>Added the developer command line options to the X11 and SDL versions,
    which are only activated in developer builds: -Dformat, -Dwidth,
    -Dheight, -Dxstart, -Dystart, -Dmerge 

<LI>Fixed window resize bug in the X11 port

<LI>Added "-nosound" command line option to the DOS port to disable audio

<LI>DOS port supports a "-vsync" option to synchronize emulation with the
    video blank of the video card

<LI>Changed VGA code in the DOS port to use a 60Hz 320x200 and a 60Hz
    320x240 graphics mode

<LI>DOS port has been updated to run better under Windows NT, 2000, and XP.
    There are still issues with the sound, however, it is usable.

<LI>DOS port is using a new Sound Blaster driver created by Matt Conte which
    supports auto-detection of sound cards.

<LI>DOS port supports a STELLA_HOME environment variable that defines 
    the location of config files.
 
<LI>In the DOS port the stella.pro file is searched for first in the
    current working director and then in the $STELLA_HOME directory

<LI>In the DOS port the ROM image is searched for first using the
    specified path, then in $STELLA_HOME/ROMS, and finally in $STELLA_HOME
</UL>


<H4>April 28, 2002</H4>
Stella release 1.2.1 for DOS is now available for download.  This release
fixes the following:
<UL>
<LI>The control keys are no longer confused for the pause key

<LI>Bug in the pause key feature which caused the emulator to lockup
    on some systems has been fixed
</UL>

<H4>Apirl 24, 2002</H4>
The http://stella.atari.org redirector will be updated soon to point to the new
Stella Website at <A HREF="http://stella.sourceforge.net">http://stella.sourceforge.net</A>. Please update your bookmarks and links if necessary...

<H4>April 23, 2002</H4>
Stella release 1.2 for DOS, Linux, and Unix is now available. Ports
to other operating systems will be released as they become available.
A partial list of features is:
<UL>
<LI>Improved illegal CPU instruction support. Thrust and Qb will now operate
    correctly.

<LI>Improved emulation of undefined TIA reads. The ball in Video Pinball
    finally bounces off of the paddles!

<LI>More accurate NTSC and PAL palettes. These palettes should be much more
    like the colors displayed on a real TV.

<LI>PAL color loss is now emulated. If a PAL game displays an odd number
    of scanlines then the next frame will be displayed in black & white.

<LI>TIA emulation improved to fix some problems with Pole Position,
    Fatal Run, Dolphin, Decathlon, Robot Tank, and Hole Hunter.

<LI>Support for Pitfall II has been added, however, the enhanced sound
    provided by the DPC chip found in the Pitfall II cartridge isn't
    currently emulated.

<LI>Support added for the Commavid (CV) bankswitching method.

<LI>Support added for the Megaboy cartridge.

<LI>Improved Supercharger emulation including a new BIOS that shows the
    vertical blue progress bars like the real thing.

<LI>Code for the emulation core has been updated to work with newer C++
    compilers compliant with the C++ standard.

<LI>Basic message support added to the TIA emulation. This allows a short
    message to overlay the TIA frame. Currently, it's used when switching
    color modes and difficulty settings.

<LI>The internal data structure for the stella.pro file was changed from
    a resizable array to a binary search tree. This results in quicker
    startup times.

<LI>An SDL port of Stella is available (requires SDL 1.2.0 or greater)

<LI>Added option to not load in the whole stella.pro file when starting
    Stella. This option is enabled on the X11, SDL, and DOS versions. Win32
    version is left alone since it's needed for loading multiple games from
    the UI. Saves on memory usage.

<LI>Added INI file option to the X11 and SDL versions. Options can be
    specified in this file instead of entering them on the commandline. Any
    options entered on the commandline override options in the INI file.
    File is called stellarc. For the X11 and SDL versions, it can be in
    either $HOME (as $HOME/.stellarc) or in /etc (as /etc/stellarc).  The
    one in $HOME has higher priority than the one in /etc.

<LI>Added snapshot support to the X11 and SDL versions. Pressing F12 saves
    the current screen in PNG format. Requires PNG library.

<LI>Removed stella.pro file from the binary, resulting in large space
    savings. The stella.pro file is no longer optional.  For the X11 and
    SDL versions, it can be in either $HOME (as $HOME/.stella.pro) or in
    /etc (as /etc/stella.pro). The one in $HOME has higher priority than
    the one in /etc. For DOS and Win32 versions, the stella.pro file must
    be in the same directory as the executable.

<LI>Added pause functionality to the core. Implemented in DOS, X11, and
    SDL versions for now.
</UL>

<H4>August 26, 2001</H4>
The http://stella.atari.org URL
will be updated soon to point to the new Stella web site at <A HREF="http://www.redlinelabs.com/stella">http://www.redlinelabs.com/stella</A>.  Please update your bookmarks and links if necessary...

<H4>June 10, 2001</H4>
<A HREF="mailto:stiles@emulation.net">John Stiles</A>' port of Stella 1.1.2 to
the PowerMac is now available online in the download section.  The biggest change is native support for Mac OS X.

<H4>November 3, 2000</H4>
<A HREF="mailto:dspice@houston.rr.com">Darrell Spice Jr.</A>'s port of
Release 1.1 of Stella to OS/2 is available for downloading.
<UL>
  <LI> Improved throttle routines for faster systems 
  <LI> Added PAL color palette and frame rates 
  <LI> New game controller status (which controller needed for current cartridge) 
  <LI> Settings dialogs 
  <LI> Keyboard controls are now user definable 
  <LI> Keyboard controls have changed 
  <LI> And much more... 
</UL>

<H4>August 22, 2000</H4>
<A HREF="mailto:enk2@po.CWRU.Edu">Erik "Voch" Kovach</A>'s latest stella.pro
file is online in the download section.

<H4> May 8, 2000</H4>
Release 1.1.3a of StellaX for Windows is available for downloading:
<UL>
  <LI>Fixed joystick handling regression
  <LI>Fixed repaint problem on doc page
  <LI>Fixed problem where some machines would report path not found
  <LI>Added force 640x480 video mode
  <LI>Added browse button on config dialog
  <LI>Improved video detection logic
  <LI>Added DisableJoystick options to stella.ini file
  <LI>Rewrote the sound driver code - no more scratchy sound!
  <LI>Added multiple screen shot support - first writes to stella00.bmp 
      then stella01.bmp, etc.
  <LI>Added cool round buttons on main screen
  <LI>Added configuration dialog
  <LI>Major code cleanup and performance tuning
  <LI>Internal ROM list should be complete - make sure your roms are in 
      the ROMS directory and that each rom has the ".bin" extension
  <LI>Run on Windows 95, Windows 98, Windows NT and Windows 2000
</UL>

<H4>September 29, 1999</H4>
<A HREF="mailto:stiles@emulation.net">John Stiles</A>' port of Stella 1.1 to
the PowerMac is online in the download section.

<H4>
July 20, 1999</H4>
<A HREF="mailto:jdandrea@att.com">Joe D'Andrea</A>'s port of Stella 1.1 to
IRIX version 6.5 is online in the download section.

<H4> June 11, 1999</H4>
Release 1.1.2 of StellaX for Windows is available for downloading:
<UL>
<LI>
Run on Windows 95, Windows 98, Windows NT and Windows 2000</LI>

<LI>
Does not take over the .bin extension</LI>

<LI>
DirectSound works on all systems</LI>

<LI>
Added DirectInput support for keyboard, mouse, and joystick (except on
NT)</LI>

<LI>
Fixed minimize button bug</LI>

<LI>
Created virtual list view to speed load time</LI>

<LI>
Add screen capture (F12 key) to save current screen to a bmp file</LI>

<LI>
Stella icon properly shows on the task list</LI>
</UL>

<H4>
March 20, 1999</H4>
Release 1.1.1 of StellaX for Windows is available for downloading:
<UL>
<LI>
Video works on all systems: Windows 9x, Windows NT and Windows 2000</LI>

<LI>
Runs on systems without sound cards</LI>

<LI>
Fixed some GDI leaks which would eventually cause a reboot on Win9x machines</LI>

<LI>
Made GUI come up faster after a game is finished playing</LI>

<LI>
Right player ';' key wasn't working in 1.1</LI>

<LI>
Undocumented command line option: -mute (mute all sound)</LI>

<LI>
Undocumented command line option: -showfps (show FPS at end of game)</LI>
</UL>

<H4>
March 18, 1999</H4>
Jeff Miller's port of Stella release 1.1 to Windows (StellaX) is available
for downloading.
<H4>
February 27, 1999</H4>
Stella release 1.1 for DOS, Linux, and Unix is now available.&nbsp; Ports
to other operating systems will be released as they become available.&nbsp;
A partial list of features is:
<UL>
<LI>
DOS and Linux versions support real Atari 2600 paddles using a special
PC game port adaptor</LI>

<LI>
Linux version uses the new 1.2.x Linux Joystick API</LI>

<LI>
Unix versions support the "-display" command line option for specifying
the display to use</LI>

<LI>
Unix versions support the "-owncmap" command line option to install a private
colormap</LI>

<LI>
Greatly improved Supercharger single-load and multi-load game support</LI>

<LI>
Improved TIA emulation to support the RESPx multi-sprite trick</LI>
</UL>

<H4>
February 27, 1999</H4>
After some careful consideration I've decided to move the Stella web site.&nbsp;
The new home page for Stella can be found at <A HREF="http://stella.atari.org">http://stella.atari.org</A>.&nbsp;
This URL will redirect you to the current location of the Stella web site
which is my school account for now.
<H4>
December 9,1998</H4>
David McEwen's port of Stella 1.0 to the Acorn platform and Joe D'Andrea's
port of Stella 1.0 for IRIX 6.2 and Solaris 2.5.1 are available for downloading.
<H4>
October 23,1998</H4>
David Asbell's port of Stella 0.7 to Java is available for downloading
in the 0.7 download directory.
<H4>
October 7, 1998</H4>
Stella release 1.0 for DOS, Linux, and Unix is now available.&nbsp; Ports
to other operating systems will be released as they become available.&nbsp;
A partial list of features is:
<UL>
<LI>
Supports Robot Tank and Decathlon</LI>

<LI>
Supports Joystick, Keyboard, Booster Grip, and Indy 500 Driving controllers</LI>

<LI>
DOS version supports 320x200 and 320x240 graphics modes</LI>

<LI>
Preliminary support for Chris Wilkson's Megacart bank-switching scheme</LI>

<LI>
Improved graphics emulation (TIA)</LI>

<LI>
Improved timer emulation (6532 PIA)</LI>

<LI>
Improved CPU emulation (6502)</LI>

<LI>
Improved Supercharger support</LI>

<LI>
Contains properties for over 540 ROMs</LI>

<LI>
Will soon be ported to to pretty much every OS under the sun :-)</LI>
</UL>

<H4>
August 2, 1998</H4>
Stella 1.0 Beta 1 for DOS is available in the "Development versions" download
area.
<H4>
July 25, 1998</H4>
At long last, Stella 1.0 Beta 1 is now available for Linux and Unix.&nbsp;
This is a stable beta release and assuming no major bugs are discovered
a final 1.0 release will be made in a few weeks.&nbsp; The beta release
can be found in the "Development versions" download area.&nbsp; Ports to
other operating systems will be released as they become available.&nbsp;
A partial list of features is:
<UL>
<LI>
Improved graphics emulation (TIA)</LI>

<LI>
Improved timer emulation (6532 PIA)</LI>

<LI>
Improved CPU emulation (6502)</LI>

<LI>
Improved Supercharger support</LI>

<LI>
Supports Robot Tank and Decathlon</LI>

<LI>
Supports Joystick, Keyboard, Booster Grip, and Indy 500 Driving controllers</LI>

<LI>
Contains properties for over 540 ROMs</LI>

<LI>
Will soon be ported to to pretty much every OS under the sun :-)</LI>
</UL>

<H4>
May 3, 1998</H4>
The Stella home page has moved to a new server! The new home page can be
found at <A HREF="http://www.classicgaming.com/stella">http://www.classicgaming.com/stella</A>.

<P>As far as the status of the next release of Stella progress is being
made, however, it'll probably be another month or so before a final release
is made. I hope you can wait...
<H4>
April 13, 1998</H4>
<A HREF="mailto:jdandrea@att.com">Joe D'Andrea</A>'s port of Stella to
IRIX version 6.2 is online in the download section.
<H4>
March 27, 1998</H4>
<A HREF="mailto:enk2@po.CWRU.Edu">Erik "Voch" Kovach</A>'s latest stella.vcs
file is online in the download section. This version contains a few new
settings for Color Bar Generator, Advertisement Cartridge, Night Stalker,
and Seesaw.
<H4>
March 13, 1998</H4>
<A HREF="mailto:enk2@po.CWRU.Edu">Erik "Voch" Kovach</A>'s latest stella.vcs
file is online in the download section. This version contains a few new
settings and has a few tweaks here and there.
<H4>
February 11, 1998</H4>
A once a year International Atari Collector/User Show set for the Summer
of 1998 at the Disneyland Hotel in Anaheim, California is being planned.
For more information see the <A HREF="http://www.atarihq.com/atari98.html">Atari
World 98</A> home page.
<H4>
February 6, 1998</H4>
<A HREF="mailto:enk2@po.CWRU.Edu">Erik "Voch" Kovach</A>'s latest stella.vcs
file is online in the download section. This version contains settings
for some of the newer games and has a few settings tweaked here and there.
<H4>
January 12, 1998</H4>
Another improved stella.vcs file by <A HREF="mailto:enk2@po.CWRU.Edu">Erik
"Voch" Kovach</A> containing the names of 479 cartridges is available from
the download section.
<H4>
January 8, 1998</H4>
An improved stella.vcs file by <A HREF="mailto:enk2@po.CWRU.Edu">Erik "Voch"
Kovach</A> is available from the download section.
<H4>
January 6, 1998</H4>
"Game Menu" version 3.2 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
is available from the download section.
<H4>
December 21, 1997</H4>
Development of version 0.8 of Stella is proceeding slower than expected.
A release before Christmas will not be made. Actually, a 0.8 release of
Stella may never be made, instead the plan is for 1.0 to be the next release.
Hopefully, the wait will be well worth it.

<P>Have a Merry Christmas!
<H4>
December 6, 1997</H4>
Stella has won an <I><A HREF="http://kayos.reshall.ksu.edu/ar/">Archaic
Ruins</A> Editor's Choice Award</I>
<H4>
November 29, 1997</H4>
"Game Menu" version 3.1 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
is available from the download section.
<H4>
November 12, 1997</H4>
"Game Menu" version 3.0 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
is available from the download section.
<H4>
October 1, 1997</H4>
Stella was featured in the article "Great Games Never Die..." on page 84
of the October issue of <I>PC-Gamer</I>.
<H4>
September 6, 1997</H4>
"Game Menu" version 2.1 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
is available from the download section.
<H4>
August 29, 1997</H4>
"Game Menu" version 2.0 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
is available from the download section.
<H4>
August 20, 1997</H4>
The development team is working on version 0.8 of Stella. A partial list
of features is:
<UL>
<LI>
Optimizations to improve speed</LI>

<LI>
Improved TIA and PIA emulation</LI>

<LI>
Improved Supercharger support</LI>

<LI>
Support for other controllers (Keypad, etc.)</LI>

<LI>
And much more...</LI>
</UL>
There is no estimated-time-of-arrival, however, hopefully it'll be ready
by Christmas.
<H4>
July 29, 1997</H4>
Stella version 0.7 has been released for Windows 95 &amp; NT.
<H4>
June 28, 1997</H4>
"Game Menu" version 1.61 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
has been released. It's available from the download section.
<H4>
June 13, 1997</H4>
Stella version 0.7 has been released for the Power Mac and OS/2.
<H4>
June 7, 1997</H4>
Stella version 0.7 has been released for DOS, Linux and Unix/X. Ports to
other systems will be released as they become available.
<H4>
June 2, 1997</H4>
Keith Wilkins is no longer supporting the DOS port of Stella due to lack
of free time and other responsibilities. Bradford Mott will be maintaining
the DOS port of Stella.
<H4>
May 23, 1997</H4>
Most of the "core" code modifications for version 0.7 have been completed.
Porting to the various operating systems is underway. Hopefully, a release
will be ready around the end of May or beginning of June.
<H4>
May 9, 1997</H4>
"Game Menu" version 1.4 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
has been released. It's available from the download section.
<H4>
March 25, 1997</H4>
Development of version 0.7 of Stella is proceeding slower than expected,
however, the wait will be well worth it. A partial list of new features
is:
<UL>
<LI>
Optimizations making this the fastest version ever!</LI>

<LI>
VCS files combined into a single file</LI>

<LI>
ROM image filename independence (name them whatever you like)</LI>

<LI>
Improved TIA emulation (Warlords works...)</LI>

<LI>
Starpath Supercharger support</LI>

<LI>
And much more...</LI>
</UL>
There is no firm estimated-time-of-arrival, however, hopefully it'll be
ready by the end of May.
<H4>
March 17, 1997</H4>
"Game Menu" version 1.3 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
has been released. It's available from the download section.
<H4>
February 17, 1997</H4>
Stella version 0.61 for Windows 95 &amp; NT has been released!
<H4>
February 14, 1997</H4>
"Game Menu" version 1.2 by <A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A>
has been released. It's available from the download section.
<H4>
February 10, 1997</H4>
The development team is working on version 0.7 of Stella. A partial list
of new features is:
<UL>
<LI>
Optimizations making this the fastest version of Stella ever!</LI>

<LI>
VCS files combined into a single file</LI>

<LI>
ROM image filename independence (name them whatever you like)</LI>

<LI>
Improved TIA emulation</LI>

<LI>
And much more....</LI>
</UL>
There is no firm estimated-time-of-arrival but it'll probably be the first
or second week of April 1997.
<H4>
February 9, 1997</H4>
<A HREF="mailto:pixelboy@lanzen.net">Luc Miron</A> has released version
0.2 of his utility which allows you to store all your VCS file data in
a single file. It's available from the download section.
<H4>
February 5, 1997</H4>
Stella version 0.6 released!
<H4>
January 31, 1997</H4>
<A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A> has released version 1.1
of his front end for MS-DOS called "Game Menu". It's available from the
download section.
<H4>
January 22, 1997</H4>
<A HREF="mailto:JPSoftCo@aol.com">Jim Pragit</A> has written an excellent
front end for MS-DOS called "Game Menu". It's available from the download
section.
<H4>
January 17, 1997</H4>
The "core" code modifications for version 0.6 have been completed. Porting
to the various operating systems is underway. A release will hopefully
be ready within the next week.
<H4>
December 16, 1996</H4>
The development team is working on Version 0.6 of Stella. A partial list
of new features is:
<UL>
<LI>
Faster than Version 0.5 on most games</LI>

<LI>
Improved 6532 (PIA) emulation to fix those screen jitters</LI>

<LI>
Support for almost all bank-switching methods</LI>

<LI>
Improved TIA emulation</LI>

<LI>
Better sound support for MS-DOS systems</LI>

<LI>
Much smaller executable size</LI>

<LI>
And much more....</LI>
</UL>
There is no firm estimated-time-of-arrival but it'll probably be the third
or forth week of January 1997.
<H4>
November 16, 1996</H4>
Stella version 0.5 released!
<H4>
October 31, 1996</H4>
The "core" code modifications for version 0.5 have been completed. Porting
to the various operating systems is underway. A release will hopefully
be ready by the 2nd week of November.
<H4>
September 24, 1996</H4>
The development team is currently working on Stella Version 0.5. This version
will have the following features:
<UL>
<LI>
Faster than Version 0.4 on most games</LI>

<LI>
Sound support (hopefully)</LI>

<LI>
More bank switching methods supported</LI>

<LI>
Improved 6532 (PIA) emulation to fix screen jitters (Frogger works)</LI>

<LI>
Fixed TIA undefined read accesses (Haunted House works)</LI>
</UL>
This is a partial list of features since Version 0.5 is still in development.
There is no firm estimated-time-of-arrival but it'll probably be sometime
near the end of October or beginning of November.
<CENTER></CENTER>
<!---------------------------------------------------------------->

			</div>
			<div class="footer"><?php include("footer.php"); ?></div>
		</div>
		<div class="leftcolumn"><?php include("menu.html"); ?></div>
	</body>
</html>
