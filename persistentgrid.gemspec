Gem::Specification.new do |s|
  # Release Specific Information
  s.version = "0.0.1.beta.2"
  s.date = "2013-08-30"

  # Gem Details
  s.name = "persistentgrid"
  s.authors = ["Babs Gosgens"]
  s.summary = %q{A grid and more.}
  s.description = %q{Persistent Grid is a grid at heart, but also boasts a great collection of re-usable modules.}
  s.email = "babs@crossinghippos.nl"
  s.homepage = "http://crossinghippos.nl/"

  # Gem Files
  s.files = %w(README.md)
  s.files += Dir.glob("lib/**/*.*")
  s.files += Dir.glob("scss/**/*.*")
  s.files += Dir.glob("templates/**/*.*")

  # Gem Bookkeeping
  s.rubygems_version = %q{1.3.6}
  s.add_dependency("compass", [">= 0.12"])
end
