// Load Grunt
module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Tasks
    sass: {
      // Begin Sass Plugin
      dist: {
        options: {
          style: 'expanded',
          // debugInfo: true,
          sourcemap: false
        },
        files: {
          'master.css' : '_source/main.scss'
        },
      },
    },
    postcss: {
      // Begin Post CSS Plugin
      options: {
        map: false,
        processors: [
          require('autoprefixer')({
            browsers: ['last 2 versions'],
          }),
        ],
      },
      dist: {
        src: 'master.css',
      },
    },
    cssmin: {
      // Begin CSS Minify Plugin
      target: {
        files: [
          {
            expand: true,
            cwd: 'css',
            src: ['*.css', '!*.min.css'],
            dest: 'css',
            ext: '.min.css',
          },
        ],
      },
    },
    // uglify: {
    //   // Begin JS Uglify Plugin
    //   build: {
    //     src: ['_source/scripts/*.js'],
    //     dest: '_deploy/js/script.min.js',
    //   },
    // },
    watch: {
      // Compile everything into one task with Watch Plugin
      css: {
        files: '_source/**/*.scss',
        tasks: ['sass', 'postcss', 'cssmin'],
        sourceComments: 'normal'
      },
      // js: {
      //   files: '_source/scripts/*.js',
      //   tasks: ['uglify'],
      // },
    },
  })
  // Load Grunt plugins
  grunt.loadNpmTasks('grunt-contrib-sass')
  grunt.loadNpmTasks('grunt-postcss')
  grunt.loadNpmTasks('grunt-contrib-cssmin')
  grunt.loadNpmTasks('grunt-contrib-uglify')
  grunt.loadNpmTasks('grunt-contrib-watch')

  // Register Grunt tasks
  grunt.registerTask('default', ['watch'])
}