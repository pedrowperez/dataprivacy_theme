module.exports = function ( grunt )
{
    grunt.initConfig( {
        pkg: grunt.file.readJSON( 'package.json' ),
        sass: {
			dist: {
				files: {
					'assets/css/main.css' : 'assets/scss/main.scss'
				}
			}
		},
		watch: {
			css: {
				files: '**/*.scss',
				tasks: ['sass']
			}
		},
        htmlmin: {
            dev: {
                options: {
                    removeComments: true,
                    collapseWhitespace: true
                },
                files: [ {
                    expand: true,
                    cwd: './',
                    src: '**/*.html',
                    dest: 'dist/'
                }]
            }
        },

        cssmin: {
            conbine: {
                files: {
                    'assets/css/style.min.css': [
                        './assets/css/main.css'
                    ]
                }
            }
        },

        uglify: {
            my_target: {
                files: {
                    'assets/js/script.min.js': [
                        './assets/js/main.js'
                    ]
                }
            }
        },

        image: {
            static: {
                options: {
                    pngquant: true,
                    optipng: false,
                    zopflipng: true,
                    // jpegRecompress: false,
                    // jpegoptim: true,
                    // mozjpeg: true,
                    gifsicle: true,
                    svgo: true
                }
            },
            dynamic: {
                files: [ {
                    expand: true,
                    cwd: 'assets/img/',
                    src: [ '**/*.{svg,png}' ],
                    dest: 'dist/img/'
                }]
            }
        },

        watch: {
            php: {
                files: [ '**/*.{php,html}' ]
            }
        },

        browserSync: {
            dev: {
                bsFiles: {
                    src: [ '**/*.{php,html}', './assets/**/*.{png,jpg,gif,svg,css,js}' ]
                },
                options: {
                    proxy: '127.0.0.1:8000',
                    port: 8000,
                    open: true,
                    watchTask: true
                }
            }
        },

        php: {
            dev: {
                options: {
                    port: 8000,
                    base: './'
                }
            }
        }
    } );

    grunt.loadNpmTasks( 'grunt-contrib-htmlmin' );
    grunt.loadNpmTasks( 'grunt-contrib-cssmin' );
    grunt.loadNpmTasks( 'grunt-contrib-uglify' );
    grunt.loadNpmTasks( 'grunt-image' );
    grunt.loadNpmTasks( 'grunt-browser-sync' );
    grunt.loadNpmTasks( 'grunt-php' );
    grunt.loadNpmTasks( 'grunt-contrib-watch' );
    grunt.loadNpmTasks('grunt-contrib-sass');
    
	grunt.registerTask('watche',['watch']);
    grunt.registerTask( 'server', [ 'php', 'browserSync', 'watch' ] );
    grunt.registerTask( 'default', [ 'cssmin', 'uglify', 'image' ] );
    grunt.registerTask( 'minify', [ 'cssmin', 'uglify' ] );
}