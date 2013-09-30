'use strict';
module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    jshint: {
      options: {
        jshintrc: '.jshintrc'
      },
      all: [
        'Gruntfile.js',
        'assets/js/custom/*.js',
        '!assets/js/scripts.min.js']
    },
    sass: {                              // Task
      dev: {                            // Target
        options: {                       // Target options        
          style: 'expanded',
          sourcemap: true,
          debugInfo: true
        },
        files: {                         // Dictionary of files
          'assets/css/style.css': 'assets/scss/style.scss'       // 'destination': 'source'
        }
      },
      dist: {                            // Target
        options: {                       // Target options
          banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
            '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
            '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
            '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
            ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
          style: 'compressed',
          debugInfo: false,
          trace: false
        },
        files: {                         // Dictionary of files
          'assets/css/style.css': 'assets/scss/style.scss'       // 'destination': 'source'
        }
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.title || pkg.name %> - v<%= pkg.version %> - ' +
          '<%= grunt.template.today("yyyy-mm-dd") %>\n' +
          '<%= pkg.homepage ? "* " + pkg.homepage + "\\n" : "" %>' +
          '* Copyright (c) <%= grunt.template.today("yyyy") %> <%= pkg.author.name %>;' +
          ' Licensed <%= _.pluck(pkg.licenses, "type").join(", ") %> */\n',
      },
      dev: {
        options: {
          beautify: true,          
        },   
        files: {'assets/js/scripts.min.js' : [
          // 'assets/js/foundation/*.js',
          'assets/js/custom/*.js'
          ]
        }
      },
      dist: {
        options: {
          report: 'gzip',
        },        
        files: {'assets/js/scripts.min.js' : [
          'assets/js/foundation/*.js',
          'assets/js/custom/*.js'
          ]
        }
      },
    },
    removelogging: {
      dist: {
        src: 'assets/js/scripts.min.js',
        dest: 'assets/js/scripts.min.js'
      }
    },    
    svgmin: {                                           // Task
      options: {                                      // Configuration that will be passed directly to SVGO
        plugins: [{
          removeViewBox: false
        }]
      },
      dist: {                                         // Target
        files: [{                                  // Dictionary of files
          expand: true,     // Enable dynamic expansion.
          cwd: 'assets/img/src',   // Src matches are relative to this path.
          src: ['assets/**/*.svg'],// Actual pattern(s) to match.
          dest: 'assets/img/',     // Destination path prefix.
          ext: '.svg'       // Dest filepaths will have this extension.
        }]
      }
    },
    smushit: {
      dist: {
        files: [{                                  // Dictionary of files
          expand: true,     // Enable dynamic expansion.
          src: ['assets/img/src/**/*.png', 'assets/img/src/**/*.jpg'], // Actual pattern(s) to match.
          dest: 'assets/img'   // Destination path prefix.
        }]
      }
    },
    watch: {
      sass: {
        files: [
          'assets/scss/custom/*.scss',
          'assets/scss/*.scss',
        ],
        tasks: ['sass:dev'],
        options: {
          // Start a live reload server on the default port 35729
          livereload: true,
        }
      },
      html: {
        files: [
          '*.php',
          'templates/*.php',
          'templates/banners/*.php',
          'templates/intro/*.php',
          'templates/content/*.php',
          'templates/loops/*.php',
          '*.html'
        ],
        options: {
          // Start a live reload server on the default port 35729
          livereload: true,
        }
      },
      js: {
        files: [
          'assets/js/custom/*.js'
        ],
        tasks: ['jshint', 'uglify:dev'],
        options: {
          // Start a live reload server on the default port 35729
          livereload: true,
        }
      }
    }    
  });

  // Load tasks
  // grunt.loadTasks('tasks');
  // grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-remove-logging');
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-svgmin');
  grunt.loadNpmTasks('grunt-smushit');
  // grunt.loadNpmTasks('grunt-recess');

  // Register tasks
  grunt.registerTask('default', [
    'watch'
  ]);
  grunt.registerTask('dist', [
    'jshint',
    'sass:dist',
    'uglify:dist',
    'removelogging',
    'svgmin',
    'smushit'
  ]);
  grunt.registerTask('img', [
    'svgmin',
    'smushit'
  ]);  
  grunt.registerTask('dev', [
    'watch'
  ]);
};