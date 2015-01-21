module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    clean: {
      mincss: {
        src: ['public_html/css/style.min.css']
      },
      revcss: {
        src: ['public_html/css/*style.min.css']
      },
      revjs: {
        src: ['public_html/js/*martinjoiner.min.js']
      },
      concatjs: {
        src: ['public_html/js/concatinated.js']
      }
    },
    jshint: {
      options: {
        curly: true,
        eqeqeq: true,
        eqnull: true,
        browser: true,
        globals: {
          jQuery: true
        }
      },
      all: ['Gruntfile.js','public_html/js/contact.js','public_html/portfolio/js/portfolio.js']
    }, 
    concat: {
      js: {
        src: [  'public_html/js/contact.js', 
                'public_html/portfolio/js/portfolio.js'
              ],
        dest: 'public_html/js/concatinated.js'
      }
    },
    uglify: {
      options: {
        banner: '/*! <%= pkg.name %> <%= grunt.template.today("yyyy-mm-dd") %> */\n'
      },
      build: {
        src: 'public_html/js/concatinated.js',
        dest: 'public_html/js/martinjoiner.min.js'
      }
    },
    cssmin: {
      css: {
        files: {
          'public_html/css/style.min.css' : 
          [ 'public_html/css/style.css' ]
        }
      }
    },
    rev: {
      css: {
        files: {
          src: ['public_html/css/style.min.css']
        }
      },
      js: {
        files: {
          src: ['public_html/js/martinjoiner.min.js']
        }
      }
    },
    injector: {
      options: { "ignorePath": ['public_html'] },
      css: {
        files: {
          'public_html/template/main.inc.php': ['public_html/css/*style.min.css'],
        }
      },
      js: {
        files: {
          'public_html/template/main.inc.php': ['public_html/js/*martinjoiner.min.js'],
        }
      }
    },
    watch: {
      js: {
        files: ['public_html/js/contact.js', 
                'public_html/portfolio/js/portfolio.js' ],
        tasks: ['js']
      },
      css: {
        files: ['public_html/css/style.css'],
        tasks: ['css']
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-cssmin');
  grunt.loadNpmTasks('grunt-rev');
  grunt.loadNpmTasks('grunt-injector');
  grunt.loadNpmTasks('grunt-contrib-watch');

  // Default task(s).
  grunt.registerTask('default', ['watch']);
  grunt.registerTask('js', ['clean:revjs','jshint','concat','uglify','rev:js','injector:js','clean:concatjs']);
  grunt.registerTask('css', ['clean:mincss','clean:revcss','cssmin','rev:css','injector:css']);

};

