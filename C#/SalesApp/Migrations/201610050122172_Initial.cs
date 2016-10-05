namespace SalesApp.Migrations
{
    using System;
    using System.Data.Entity.Migrations;
    
    public partial class Initial : DbMigration
    {
        public override void Up()
        {
            CreateTable(
                "dbo.SalesPersons",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        Active = c.Boolean(nullable: false),
                        FirstName = c.String(nullable: false, maxLength: 20),
                        LastName = c.String(nullable: false, maxLength: 20),
                        RegionId = c.Int(nullable: false),
                        CreatedBy = c.String(nullable: false, maxLength: 30),
                        CreatedDate = c.DateTime(nullable: false),
                        UpdatedBy = c.String(nullable: false, maxLength: 30),
                        UpdatedDate = c.DateTime(nullable: false),
                    })
                .PrimaryKey(t => t.ID)
                .ForeignKey("dbo.SalesRegions", t => t.RegionId)
                .Index(t => t.RegionId);
            
            CreateTable(
                "dbo.SalesRegions",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        Active = c.Boolean(nullable: false),
                        Name = c.String(nullable: false, maxLength: 20),
                        Code = c.String(nullable: false, maxLength: 5),
                        CreatedBy = c.String(nullable: false, maxLength: 30),
                        CreatedDate = c.DateTime(nullable: false),
                        UpdatedBy = c.String(nullable: false, maxLength: 30),
                        UpdatedDate = c.DateTime(nullable: false),
                    })
                .PrimaryKey(t => t.ID);
            
            CreateTable(
                "dbo.Sales",
                c => new
                    {
                        ID = c.Int(nullable: false, identity: true),
                        Amount = c.Decimal(nullable: false, precision: 18, scale: 2),
                        Date = c.DateTime(nullable: false),
                        PersonId = c.Int(nullable: false),
                        RegionId = c.Int(nullable: false),
                        CreatedBy = c.String(nullable: false, maxLength: 30),
                        CreatedDate = c.DateTime(nullable: false),
                        UpdatedBy = c.String(nullable: false, maxLength: 30),
                        UpdatedDate = c.DateTime(nullable: false),
                    })
                .PrimaryKey(t => t.ID)
                .ForeignKey("dbo.SalesPersons", t => t.PersonId)
                .ForeignKey("dbo.SalesRegions", t => t.RegionId)
                .Index(t => t.PersonId)
                .Index(t => t.RegionId);
            
        }
        
        public override void Down()
        {
            DropForeignKey("dbo.Sales", "RegionId", "dbo.SalesRegions");
            DropForeignKey("dbo.Sales", "PersonId", "dbo.SalesPersons");
            DropForeignKey("dbo.SalesPersons", "RegionId", "dbo.SalesRegions");
            DropIndex("dbo.Sales", new[] { "RegionId" });
            DropIndex("dbo.Sales", new[] { "PersonId" });
            DropIndex("dbo.SalesPersons", new[] { "RegionId" });
            DropTable("dbo.Sales");
            DropTable("dbo.SalesRegions");
            DropTable("dbo.SalesPersons");
        }
    }
}
