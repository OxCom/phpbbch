<?php

namespace oxcom\phpbbch\core;

class settings
{
    /**
     * Get list of available languages
     *
     * @return array
     */
    public static function getLanguages()
    {
        $list = [
            'apache'         => 'Apache',
            'bash'           => 'Bash',
            'csharp'         => 'C#',
            'cpp'            => 'C++',
            'c'              => 'C',
            'css'            => 'CSS',
            'coffeescript'   => 'CoffeeScript',
            'diff'           => 'Diff',
            'xml'            => 'HTML, XML',
            'http'           => 'HTTP',
            'ini'            => 'Ini',
            'json'           => 'JSON',
            'java'           => 'Java',
            'javascript'     => 'JavaScript',
            'makefile'       => 'Makefile',
            'markdown'       => 'Markdown',
            'nginx'          => 'Nginx',
            'objectivec'     => 'Objective-C',
            'php'            => 'PHP',
            'perl'           => 'Perl',
            'python'         => 'Python',
            'ruby'           => 'Ruby',
            'sql'            => 'SQL',
            'shell'          => 'Shell Session',
            '1c'             => '1C:Enterprise (v7, v8)',
            'armasm'         => 'ARM Assembly',
            'avrasm'         => 'AVR Assembler',
            'accesslog'      => 'Access log',
            'actionscript'   => 'ActionScript',
            'ada'            => 'Ada',
            'angelscript'    => 'AngelScript',
            'applescript'    => 'AppleScript',
            'arcade'         => 'ArcGIS Arcade',
            'arduino'        => 'Arduino',
            'asciidoc'       => 'AsciiDoc',
            'aspectj'        => 'AspectJ',
            'abnf'           => 'Augmented Backus-Naur Form',
            'autohotkey'     => 'AutoHotkey',
            'autoit'         => 'AutoIt',
            'awk'            => 'Awk',
            'axapta'         => 'Axapta',
            'bnf'            => 'Backus–Naur Form',
            'basic'          => 'Basic',
            'brainfuck'      => 'Brainfuck',
            'cal'            => 'C/AL',
            'cmake'          => 'CMake',
            'csp'            => 'CSP',
            'cos'            => 'Caché Object Script',
            'capnproto'      => 'Cap’n Proto',
            'ceylon'         => 'Ceylon',
            'clean'          => 'Clean',
            'clojure'        => 'Clojure',
            'clojure-repl'   => 'Clojure REPL',
            'coq'            => 'Coq',
            'crystal'        => 'Crystal',
            'd'              => 'D',
            'dns'            => 'DNS Zone file',
            'dos'            => 'DOS .bat',
            'dart'           => 'Dart',
            'delphi'         => 'Delphi',
            'dts'            => 'Device Tree',
            'django'         => 'Django',
            'dockerfile'     => 'Dockerfile',
            'dust'           => 'Dust',
            'erb'            => 'ERB (Embedded Ruby)',
            'elixir'         => 'Elixir',
            'elm'            => 'Elm',
            'erlang'         => 'Erlang',
            'erlang-repl'    => 'Erlang REPL',
            'excel'          => 'Excel',
            'ebnf'           => 'Extended Backus-Naur Form',
            'fsharp'         => 'F#',
            'fix'            => 'FIX',
            'flix'           => 'Flix',
            'fortran'        => 'Fortran',
            'gcode'          => 'G-code (ISO 6983)',
            'gams'           => 'GAMS',
            'gauss'          => 'GAUSS',
            'glsl'           => 'GLSL',
            'gherkin'        => 'Gherkin',
            'go'             => 'Go',
            'golo'           => 'Golo',
            'gradle'         => 'Gradle',
            'groovy'         => 'Groovy',
            'gml'            => 'GML',
            'hsp'            => 'HSP',
            'haml'           => 'Haml',
            'handlebars'     => 'Handlebars',
            'haskell'        => 'Haskell',
            'haxe'           => 'Haxe',
            'hy'             => 'Hy',
            'irpf90'         => 'IRPF90',
            'inform7'        => 'Inform 7',
            'isbl'           => 'ISBL',
            'x86asm'         => 'Intel x86 Assembly',
            'julia'          => 'Julia',
            'julia-repl'     => 'Julia REPL',
            'kotlin'         => 'Kotlin',
            'latex'          => 'LaTeX',
            'ldif'           => 'LDIF',
            'llvm'           => 'LLVM IR',
            'lasso'          => 'Lasso',
            'leaf'           => 'Leaf',
            'less'           => 'Less',
            'lsl'            => 'Linden Scripting Language',
            'lisp'           => 'Lisp',
            'livecodeserver' => 'LiveCode',
            'livescript'     => 'LiveScript',
            'lua'            => 'Lua',
            'mel'            => 'MEL',
            'mipsasm'        => 'MIPS Assembly',
            'mathematica'    => 'Mathematica',
            'matlab'         => 'Matlab',
            'maxima'         => 'Maxima',
            'mercury'        => 'Mercury',
            'routeros'       => 'Microtik RouterOS script',
            'mizar'          => 'Mizar',
            'mojolicious'    => 'Mojolicious',
            'monkey'         => 'Monkey',
            'moonscript'     => 'MoonScript',
            'n1ql'           => 'N1QL',
            'nsis'           => 'NSIS',
            'nix'            => 'Nix',
            'ocaml'          => 'OCaml',
            'openscad'       => 'OpenSCAD',
            'ruleslanguage'  => 'Oracle Rules Language',
            'oxygene'        => 'Oxygene',
            'parser3'        => 'Parser3',
            'pgsql'          => 'PostgreSQL and PL/pgSQL',
            'pony'           => 'Pony',
            'powershell'     => 'PowerShell',
            'processing'     => 'Processing',
            'prolog'         => 'Prolog',
            'protobuf'       => 'Protocol Buffers',
            'puppet'         => 'Puppet',
            'purebasic'      => 'PureBASIC',
            'properties'     => '.properties',
            'profile'        => 'Python profile',
            'q'              => 'Q',
            'qml'            => 'QML',
            'r'              => 'R',
            'rib'            => 'RenderMan RIB',
            'rsl'            => 'RenderMan RSL',
            'roboconf'       => 'Roboconf',
            'rust'           => 'Rust',
            'scss'           => 'SCSS',
            'sml'            => 'SML',
            'sqf'            => 'SQF',
            'step21'         => 'STEP Part 21',
            'scala'          => 'Scala',
            'scheme'         => 'Scheme',
            'scilab'         => 'Scilab',
            'smali'          => 'Smali',
            'smalltalk'      => 'Smalltalk',
            'stan'           => 'Stan',
            'stata'          => 'Stata',
            'stylus'         => 'Stylus',
            'subunit'        => 'SubUnit',
            'swift'          => 'Swift',
            'tp'             => 'TP',
            'taggerscript'   => 'Tagger Script',
            'tcl'            => 'Tcl',
            'tap'            => 'Test Anything Protocol',
            'thrift'         => 'Thrift',
            'twig'           => 'Twig',
            'typescript'     => 'TypeScript',
            'vbnet'          => 'VB.NET',
            'vbscript'       => 'VBScript',
            'vbscript-html'  => 'VBScript in HTML',
            'vhdl'           => 'VHDL',
            'vala'           => 'Vala',
            'verilog'        => 'Verilog',
            'vim'            => 'Vim Script',
            'xl'             => 'XL',
            'xquery'         => 'XQuery',
            'yaml'           => 'YAML',
            'zephir'         => 'Zephir',
            'crmsh'          => 'crmsh',
            'dsconfig'       => 'dsconfig',
            'jboss-cli'      => 'jboss-cli',
            'pf'             => 'pf',
            'wasm'           => 'WebAssembly',
        ];

        return $list;
    }

    /**
     * Get list of available themes
     *
     * @return array
     */
    public static function getThemes()
    {
        $list = [
            'default'                              => 'Default',
            'a11y-dark'                            => 'A 11 Y Dark',
            'a11y-light'                           => 'A 11 Y Light',
            'agate'                                => 'Agate',
            'an-old-hope'                          => 'An Old Hope',
            'androidstudio'                        => 'Androidstudio',
            'arduino-light'                        => 'Arduino Light',
            'arta'                                 => 'Arta',
            'ascetic'                              => 'Ascetic',
            'atom-one-dark'                        => 'Atom One Dark',
            'atom-one-dark-reasonable'             => 'Atom One Dark Reasonable',
            'atom-one-light'                       => 'Atom One Light',
            'base16/3024'                          => 'Base16 /3024',
            'base16/apathy'                        => 'Base16 /Apathy',
            'base16/apprentice'                    => 'Base16 /Apprentice',
            'base16/ashes'                         => 'Base16 /Ashes',
            'base16/atelier-cave'                  => 'Base16 / AtelierCave',
            'base16/atelier-cave-light'            => 'Base16 / Atelier CaveLight',
            'base16/atelier-dune'                  => 'Base16 / AtelierDune',
            'base16/atelier-dune-light'            => 'Base16 / Atelier DuneLight',
            'base16/atelier-estuary'               => 'Base16 / AtelierEstuary',
            'base16/atelier-estuary-light'         => 'Base16 / Atelier EstuaryLight',
            'base16/atelier-forest'                => 'Base16 / AtelierForest',
            'base16/atelier-forest-light'          => 'Base16 / Atelier ForestLight',
            'base16/atelier-heath'                 => 'Base16 / AtelierHeath',
            'base16/atelier-heath-light'           => 'Base16 / Atelier HeathLight',
            'base16/atelier-lakeside'              => 'Base16 / AtelierLakeside',
            'base16/atelier-lakeside-light'        => 'Base16 / Atelier LakesideLight',
            'base16/atelier-plateau'               => 'Base16 / AtelierPlateau',
            'base16/atelier-plateau-light'         => 'Base16 / Atelier PlateauLight',
            'base16/atelier-savanna'               => 'Base16 / AtelierSavanna',
            'base16/atelier-savanna-light'         => 'Base16 / Atelier SavannaLight',
            'base16/atelier-seaside'               => 'Base16 / AtelierSeaside',
            'base16/atelier-seaside-light'         => 'Base16 / Atelier SeasideLight',
            'base16/atelier-sulphurpool'           => 'Base16 / AtelierSulphurpool',
            'base16/atelier-sulphurpool-light'     => 'Base16 / Atelier SulphurpoolLight',
            'base16/atlas'                         => 'Base16 /Atlas',
            'base16/bespin'                        => 'Base16 /Bespin',
            'base16/black-metal'                   => 'Base16 / BlackMetal',
            'base16/black-metal-bathory'           => 'Base16 / Black MetalBathory',
            'base16/black-metal-burzum'            => 'Base16 / Black MetalBurzum',
            'base16/black-metal-dark-funeral'      => 'Base16 / Black Metal DarkFuneral',
            'base16/black-metal-gorgoroth'         => 'Base16 / Black MetalGorgoroth',
            'base16/black-metal-immortal'          => 'Base16 / Black MetalImmortal',
            'base16/black-metal-khold'             => 'Base16 / Black MetalKhold',
            'base16/black-metal-marduk'            => 'Base16 / Black MetalMarduk',
            'base16/black-metal-mayhem'            => 'Base16 / Black MetalMayhem',
            'base16/black-metal-nile'              => 'Base16 / Black MetalNile',
            'base16/black-metal-venom'             => 'Base16 / Black MetalVenom',
            'base16/brewer'                        => 'Base16 /Brewer',
            'base16/bright'                        => 'Base16 /Bright',
            'base16/brogrammer'                    => 'Base16 /Brogrammer',
            'base16/brush-trees'                   => 'Base16 / BrushTrees',
            'base16/brush-trees-dark'              => 'Base16 / Brush TreesDark',
            'base16/chalk'                         => 'Base16 /Chalk',
            'base16/circus'                        => 'Base16 /Circus',
            'base16/classic-dark'                  => 'Base16 / ClassicDark',
            'base16/classic-light'                 => 'Base16 / ClassicLight',
            'base16/codeschool'                    => 'Base16 /Codeschool',
            'base16/colors'                        => 'Base16 /Colors',
            'base16/cupcake'                       => 'Base16 /Cupcake',
            'base16/cupertino'                     => 'Base16 /Cupertino',
            'base16/danqing'                       => 'Base16 /Danqing',
            'base16/darcula'                       => 'Base16 /Darcula',
            'base16/dark-violet'                   => 'Base16 / DarkViolet',
            'base16/darkmoss'                      => 'Base16 /Darkmoss',
            'base16/darktooth'                     => 'Base16 /Darktooth',
            'base16/decaf'                         => 'Base16 /Decaf',
            'base16/default-dark'                  => 'Base16 / DefaultDark',
            'base16/default-light'                 => 'Base16 / DefaultLight',
            'base16/dirtysea'                      => 'Base16 /Dirtysea',
            'base16/dracula'                       => 'Base16 /Dracula',
            'base16/edge-dark'                     => 'Base16 / EdgeDark',
            'base16/edge-light'                    => 'Base16 / EdgeLight',
            'base16/eighties'                      => 'Base16 /Eighties',
            'base16/embers'                        => 'Base16 /Embers',
            'base16/equilibrium-dark'              => 'Base16 / EquilibriumDark',
            'base16/equilibrium-gray-dark'         => 'Base16 / Equilibrium GrayDark',
            'base16/equilibrium-gray-light'        => 'Base16 / Equilibrium GrayLight',
            'base16/equilibrium-light'             => 'Base16 / EquilibriumLight',
            'base16/espresso'                      => 'Base16 /Espresso',
            'base16/eva'                           => 'Base16 /Eva',
            'base16/eva-dim'                       => 'Base16 / EvaDim',
            'base16/flat'                          => 'Base16 /Flat',
            'base16/framer'                        => 'Base16 /Framer',
            'base16/fruit-soda'                    => 'Base16 / FruitSoda',
            'base16/gigavolt'                      => 'Base16 /Gigavolt',
            'base16/github'                        => 'Base16 /Github',
            'base16/google-dark'                   => 'Base16 / GoogleDark',
            'base16/google-light'                  => 'Base16 / GoogleLight',
            'base16/grayscale-dark'                => 'Base16 / GrayscaleDark',
            'base16/grayscale-light'               => 'Base16 / GrayscaleLight',
            'base16/green-screen'                  => 'Base16 / GreenScreen',
            'base16/gruvbox-dark-hard'             => 'Base16 / Gruvbox DarkHard',
            'base16/gruvbox-dark-medium'           => 'Base16 / Gruvbox DarkMedium',
            'base16/gruvbox-dark-pale'             => 'Base16 / Gruvbox DarkPale',
            'base16/gruvbox-dark-soft'             => 'Base16 / Gruvbox DarkSoft',
            'base16/gruvbox-light-hard'            => 'Base16 / Gruvbox LightHard',
            'base16/gruvbox-light-medium'          => 'Base16 / Gruvbox LightMedium',
            'base16/gruvbox-light-soft'            => 'Base16 / Gruvbox LightSoft',
            'base16/hardcore'                      => 'Base16 /Hardcore',
            'base16/harmonic16-dark'              => 'Base16 / Harmonic 16 Dark',
            'base16/harmonic16-light'             => 'Base16 / Harmonic 16 Light',
            'base16/heetch-dark'                   => 'Base16 / HeetchDark',
            'base16/heetch-light'                  => 'Base16 / HeetchLight',
            'base16/helios'                        => 'Base16 /Helios',
            'base16/hopscotch'                     => 'Base16 /Hopscotch',
            'base16/horizon-dark'                  => 'Base16 / HorizonDark',
            'base16/horizon-light'                 => 'Base16 / HorizonLight',
            'base16/humanoid-dark'                 => 'Base16 / HumanoidDark',
            'base16/humanoid-light'                => 'Base16 / HumanoidLight',
            'base16/ia-dark'                       => 'Base16 / IaDark',
            'base16/ia-light'                      => 'Base16 / IaLight',
            'base16/icy-dark'                      => 'Base16 / IcyDark',
            'base16/ir-black'                      => 'Base16 / IrBlack',
            'base16/isotope'                       => 'Base16 /Isotope',
            'base16/kimber'                        => 'Base16 /Kimber',
            'base16/london-tube'                   => 'Base16 / LondonTube',
            'base16/macintosh'                     => 'Base16 /Macintosh',
            'base16/marrakesh'                     => 'Base16 /Marrakesh',
            'base16/materia'                       => 'Base16 /Materia',
            'base16/material'                      => 'Base16 /Material',
            'base16/material-darker'               => 'Base16 / MaterialDarker',
            'base16/material-lighter'              => 'Base16 / MaterialLighter',
            'base16/material-palenight'            => 'Base16 / MaterialPalenight',
            'base16/material-vivid'                => 'Base16 / MaterialVivid',
            'base16/mellow-purple'                 => 'Base16 / MellowPurple',
            'base16/mexico-light'                  => 'Base16 / MexicoLight',
            'base16/mocha'                         => 'Base16 /Mocha',
            'base16/monokai'                       => 'Base16 /Monokai',
            'base16/nebula'                        => 'Base16 /Nebula',
            'base16/nord'                          => 'Base16 /Nord',
            'base16/nova'                          => 'Base16 /Nova',
            'base16/ocean'                         => 'Base16 /Ocean',
            'base16/oceanicnext'                   => 'Base16 /Oceanicnext',
            'base16/one-light'                     => 'Base16 / OneLight',
            'base16/onedark'                       => 'Base16 /Onedark',
            'base16/outrun-dark'                   => 'Base16 / OutrunDark',
            'base16/papercolor-dark'               => 'Base16 / PapercolorDark',
            'base16/papercolor-light'              => 'Base16 / PapercolorLight',
            'base16/paraiso'                       => 'Base16 /Paraiso',
            'base16/pasque'                        => 'Base16 /Pasque',
            'base16/phd'                           => 'Base16 /Phd',
            'base16/pico'                          => 'Base16 /Pico',
            'base16/pop'                           => 'Base16 /Pop',
            'base16/porple'                        => 'Base16 /Porple',
            'base16/qualia'                        => 'Base16 /Qualia',
            'base16/railscasts'                    => 'Base16 /Railscasts',
            'base16/rebecca'                       => 'Base16 /Rebecca',
            'base16/ros-pine'                      => 'Base16 / RosPine',
            'base16/ros-pine-dawn'                 => 'Base16 / Ros PineDawn',
            'base16/ros-pine-moon'                 => 'Base16 / Ros PineMoon',
            'base16/sagelight'                     => 'Base16 /Sagelight',
            'base16/sandcastle'                    => 'Base16 /Sandcastle',
            'base16/seti-ui'                       => 'Base16 / SetiUi',
            'base16/shapeshifter'                  => 'Base16 /Shapeshifter',
            'base16/silk-dark'                    => 'Base16 / Silk Dark',
            'base16/silk-light'                    => 'Base16 / Silk Light',
            'base16/snazzy'                        => 'Base16 /Snazzy',
            'base16/solar-flare'                   => 'Base16 / SolarFlare',
            'base16/solar-flare-light'             => 'Base16 / Solar FlareLight',
            'base16/solarized-dark'                => 'Base16 / SolarizedDark',
            'base16/solarized-light'               => 'Base16 / SolarizedLight',
            'base16/spacemacs'                     => 'Base16 /Spacemacs',
            'base16/summercamp'                    => 'Base16 /Summercamp',
            'base16/summerfruit-dark'              => 'Base16 / SummerfruitDark',
            'base16/summerfruit-light'             => 'Base16 / SummerfruitLight',
            'base16/synth-midnight-terminal-dark'  => 'Base16 / Synth Midnight TerminalDark',
            'base16/synth-midnight-terminal-light' => 'Base16 / Synth Midnight TerminalLight',
            'base16/tango'                         => 'Base16 /Tango',
            'base16/tender'                        => 'Base16 /Tender',
            'base16/tomorrow'                      => 'Base16 /Tomorrow',
            'base16/tomorrow-night'                => 'Base16 / TomorrowNight',
            'base16/twilight'                      => 'Base16 /Twilight',
            'base16/unikitty-dark'                 => 'Base16 / UnikittyDark',
            'base16/unikitty-light'                => 'Base16 / UnikittyLight',
            'base16/vulcan'                        => 'Base16 /Vulcan',
            'base16/windows-10'                    => 'Base16 / Windows10',
            'base16/windows-10-light'              => 'Base16 / Windows 10Light',
            'base16/windows-95'                    => 'Base16 / Windows95',
            'base16/windows-95-light'              => 'Base16 / Windows 95Light',
            'base16/windows-high-contrast'         => 'Base16 / Windows HighContrast',
            'base16/windows-high-contrast-light'   => 'Base16 / Windows High ContrastLight',
            'base16/windows-nt'                    => 'Base16 / WindowsNt',
            'base16/windows-nt-light'              => 'Base16 / Windows NtLight',
            'base16/woodland'                      => 'Base16 /Woodland',
            'base16/xcode-dusk'                    => 'Base16 / XcodeDusk',
            'base16/zenburn'                       => 'Base16 /Zenburn',
            'brown-paper'                          => 'Brown Paper',
            'codepen-embed'                        => 'Codepen Embed',
            'color-brewer'                         => 'Color Brewer',
            'dark'                                 => 'Dark',
            'devibeans'                            => 'Devibeans',
            'docco'                                => 'Docco',
            'far'                                  => 'Far',
            'foundation'                           => 'Foundation',
            'github'                               => 'Github',
            'github-dark'                          => 'Github Dark',
            'github-dark-dimmed'                   => 'Github Dark Dimmed',
            'gml'                                  => 'Gml',
            'googlecode'                           => 'Googlecode',
            'gradient-dark'                        => 'Gradient Dark',
            'gradient-light'                       => 'Gradient Light',
            'grayscale'                            => 'Grayscale',
            'hybrid'                               => 'Hybrid',
            'idea'                                 => 'Idea',
            'ir-black'                             => 'Ir Black',
            'isbl-editor-dark'                     => 'Isbl Editor Dark',
            'isbl-editor-light'                    => 'Isbl Editor Light',
            'kimbie-dark'                          => 'Kimbie Dark',
            'kimbie-light'                         => 'Kimbie Light',
            'lightfair'                            => 'Lightfair',
            'lioshi'                               => 'Lioshi',
            'magula'                               => 'Magula',
            'mono-blue'                            => 'Mono Blue',
            'monokai'                              => 'Monokai',
            'monokai-sublime'                      => 'Monokai Sublime',
            'night-owl'                            => 'Night Owl',
            'nnfx-dark'                            => 'Nnfx Dark',
            'nnfx-light'                           => 'Nnfx Light',
            'nord'                                 => 'Nord',
            'obsidian'                             => 'Obsidian',
            'paraiso-dark'                         => 'Paraiso Dark',
            'paraiso-light'                        => 'Paraiso Light',
            'pojoaque'                             => 'Pojoaque',
            'purebasic'                            => 'Purebasic',
            'qtcreator-dark'                       => 'Qtcreator Dark',
            'qtcreator-light'                      => 'Qtcreator Light',
            'rainbow'                              => 'Rainbow',
            'routeros'                             => 'Routeros',
            'school-book'                          => 'School Book',
            'shades-of-purple'                     => 'Shades Of Purple',
            'srcery'                               => 'Srcery',
            'stackoverflow-dark'                   => 'Stackoverflow Dark',
            'stackoverflow-light'                  => 'Stackoverflow Light',
            'sunburst'                             => 'Sunburst',
            'tomorrow-night-blue'                  => 'Tomorrow Night Blue',
            'tomorrow-night-bright'                => 'Tomorrow Night Bright',
            'vs'                                   => 'Vs',
            'vs2015'                               => 'Vs 2015',
            'xcode'                                => 'Xcode',
            'xt256'                                => 'Xt 256',
        ];

        return $list;
    }
}
