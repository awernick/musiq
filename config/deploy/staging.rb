# Define roles, user and IP address of deployment server
# role :name, %{[user]@[IP adde.]}
# role :app, %w{deployer@napkin-studio.com}
# role :web, %w{deployer@napkin-studio.com}
# role :db,  %w{deployer@napkin-studio.com}

role :app, %w{deployer@napkin-studio.com}
role :web, %w{deployer@napkin-studio.com}
role :db,  %w{deployer@napkin-studio.com}

# Define server(s)
server 'napkin-studio.com', user: 'deployer', roles: %w{web}

set :deploy_to, "/usr/share/nginx/html/cs3360_project/"
set :stage, :staging

# SSH Options
# See the example commented out section in the file
# for more options.
set :ssh_options, {
    forward_agent: false,
    auth_methods: %w(password),
    password: 'C@p!$tr@n0',
    user: 'deployer',
}
