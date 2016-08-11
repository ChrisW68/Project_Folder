using Microsoft.Owin;
using Owin;

[assembly: OwinStartupAttribute(typeof(Album_Log.Startup))]
namespace Album_Log
{
    public partial class Startup
    {
        public void Configuration(IAppBuilder app)
        {
            ConfigureAuth(app);
        }
    }
}
