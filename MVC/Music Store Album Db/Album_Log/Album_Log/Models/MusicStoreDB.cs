using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Linq;
using System.Web;

namespace Album_Log.Models
{
    public class MusicStoreDB : DbContext
    {
        // You can add custom code to this file. Changes will not be overwritten.
        // 
        // If you want Entity Framework to drop and regenerate your database
        // automatically whenever you change your model schema, please use data migrations.
        // For more information refer to the documentation:
        // http://msdn.microsoft.com/en-us/data/jj591621.aspx

        protected void Application_Start()
        {
            Database.SetInitializer(
                new DropCreateDatabaseAlways<MusicStoreDB>());
            AreaRegistration.RegisterAllAreas();
            FilterConfig.RegisterGlobalFilters(GlobalFilters.Filters);
            RouteConfig.RegisterRoutes(RouteTable.Routes);
            BundleConfig.RegisterBundles(BundleTable.Bundles);
        }
    
        public MusicStoreDB() : base("name=MusicStoreDB")
        {
        }

        public System.Data.Entity.DbSet<Album_Log.Models.Album> Albums { get; set; }

        public System.Data.Entity.DbSet<Album_Log.Models.Artist> Artists { get; set; }

        public System.Data.Entity.DbSet<Album_Log.Models.Genre> Genres { get; set; }
    }
}
