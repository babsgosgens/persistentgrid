require 'compass'
Compass::Frameworks.register('persistentgrid',
                             :stylesheets_directory => File.join(File.dirname(__FILE__), '..', 'scss'),
                             :templates_directory => File.join(File.dirname(__FILE__), '..', 'css'))