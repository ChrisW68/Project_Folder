using SalesApp.Interfaces;
using SalesApp.Models;
using System;
using System.Collections.Generic;
using System.Data.Entity;
using System.Data.Entity.Infrastructure;
using System.Data.Entity.ModelConfiguration.Conventions;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace SalesApp.Data
{
    class SalesContext : DbContext
    {
        public DbSet<Sale> Sales { get; set; }

        public DbSet<SalesPerson> People { get; set; }

        public DbSet<SalesRegion> Regions { get; set; }

        protected override void OnModelCreating(DbModelBuilder modelBuilder)
        {
            base.OnModelCreating(modelBuilder);

            /* To prevent cascade delete outside Salesperson Sales Region  */
            modelBuilder.Conventions.Remove<OneToManyCascadeDeleteConvention>();
        }

        public override int SaveChanges()
        {
            ChangeTracker.DetectChanges();

            /* stateManager controls all entities in the data context that are being changed or tracking */
            var stateManager = ((IObjectContextAdapter)this).ObjectContext.ObjectStateManager;

            /* Then grab deleted entity by stating give me all entities that have been deleted and only
             * the actual entity itself by selecting the entity that are IActive then get a Array */
            var deletedEntities = stateManager
                .GetObjectStateEntries(EntityState.Deleted)
                .Select(e => e.Entity)
                .OfType<IActive>()
                .ToArray();


            /* Look through the Array and as long as the entity is not null the state is change the state  
             * to modify and active flag to false */
            foreach (var deletedEntity in deletedEntities)
            {
                if (deletedEntity == null) continue;
                stateManager.ChangeObjectState(deletedEntity, EntityState.Modified);
                deletedEntity.Active = false;
            }

            var createdEntities = stateManager
                .GetObjectStateEntries(EntityState.Added)
                .Select(e => e.Entity)
                .OfType<BaseModel>()
                .ToArray();

            /* Security to get the current windows username and place it in the database */
            foreach (var createdEntity in createdEntities)
            {
                createdEntity.CreatedDate = DateTime.Now;
                createdEntity.CreatedBy = Environment.UserName;
                createdEntity.UpdatedDate = DateTime.Now;
                createdEntity.UpdatedBy = Environment.UserName;
                
            }

            var updatedEntities = stateManager
                .GetObjectStateEntries(EntityState.Modified)
                .Select(e => e.Entity)
                .OfType<BaseModel>()
                .ToArray();

            /* Security to get the updated windows username and place it in the database */
            foreach (var updatedEntity in updatedEntities)
            {
                updatedEntity.UpdatedDate = DateTime.Now;
                updatedEntity.UpdatedBy = Environment.UserName;
             
            }
            /* Returns a integer of the number of models that have changed */
            return base.SaveChanges();
        }

    }
}
