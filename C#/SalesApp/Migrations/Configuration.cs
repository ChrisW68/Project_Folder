namespace SalesApp.Migrations
{
    using Models;
    using System;
    using System.Data.Entity;
    using System.Data.Entity.Migrations;
    using System.Linq;

    internal sealed class Configuration : DbMigrationsConfiguration<SalesApp.Data.SalesContext>
    {
        public Configuration()
        {
            AutomaticMigrationsEnabled = false;
        }

        protected override void Seed(SalesApp.Data.SalesContext context)
        {
            //  This method will be called after migrating to the latest version.

            //  You can use the DbSet<T>.AddOrUpdate() helper extension method 
            //  to avoid creating duplicate seed data. E.g.
            //
            //    context.People.AddOrUpdate(
            //      p => p.FullName,
            //      new Person { FullName = "Andrew Peters" },
            //      new Person { FullName = "Brice Lambson" },
            //      new Person { FullName = "Rowan Miller" }
            //    );
            //

            context.Regions.AddOrUpdate(
                p => p.ID,
                new SalesRegion
                {
                    Active = true,
                    Code = "NTH",
                    CreatedBy = "Admin",
                    CreatedDate = DateTime.Now,
                    ID = 1,
                    Name = "North Region",
                    SalesTarget = 1000.00M,
                    UpdatedBy = "Admin",
                    UpdatedDate = DateTime.Now

                },
                new SalesRegion
                {
                    Active = true,
                    Code = "STH",
                    CreatedBy = "Admin",
                    CreatedDate = DateTime.Now,
                    ID = 2,
                    Name = "South Region",
                    SalesTarget = 1000.00M,
                    UpdatedBy = "Admin",
                    UpdatedDate = DateTime.Now
                }
                
                );
        }
    }
}
